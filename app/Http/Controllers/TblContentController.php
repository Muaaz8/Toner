<?php

namespace App\Http\Controllers;

use App\Models\Tbl_Content;
use Illuminate\Http\Request;

class TblContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Tbl_Content::where('slug','!=','logo')->where('slug','!=','location')->get();
        return view('content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tbl__contents,name', // Ensure name is required and unique
            'content' => 'required'
        ]);

        // Create and save the brand
        Tbl_Content::create([
            'name' => $request->input('name'),
            'slug' => \Str::slug($request->input('name')),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dynamic_contents.index')->with('success', 'Content created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbl_Content  $tbl_Content
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_Content $tbl_Content)
    {
        $content = Tbl_Content::find($id);
        return view('content.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_Content  $tbl_Content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Tbl_Content::find($id);
        return view('content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_Content  $tbl_Content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:tbl__contents,name,' . $id, // Ensure name is required and unique, excluding the current brand
        ]);

        // Find the brand and update its name
        $content = Tbl_Content::find($id);
        $content->name = $request->input('name');
        $content->slug = \Str::slug($request->input('name'));
        $content->content = $request->input('content');
        $content->save();

        return redirect()->route('dynamic_contents.index')->with('success', 'Content updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_Content  $tbl_Content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Tbl_Content::findOrFail($id);
        $content->delete();

        return redirect()->route('dynamic_contents.index')->with('success', 'Content deleted successfully');
    }


    public function list_logo(){
        $contents = Tbl_Content::where('name','logo')->get();
        return view('logo.index', compact('contents'));
    }

    public function logo_create(){
        return view('logo.create');
    }

    public function logo_store(Request $request){
        $exist = Tbl_Content::where('slug','logo')->first();
        if($exist != null){
            Tbl_Content::where('slug','logo')->delete();
        }
        $extension = $request->content->getClientOriginalExtension();
        $filename = time().rand(1,50).'.' . $extension;
        $request->content->move(public_path('uploads/'), $filename);
        Tbl_Content::create([
            'name' => $request->input('name'),
            'slug' => \Str::slug($request->input('name')),
            'content'=>'uploads/'.$filename,
        ]);
        return redirect()->route('logo')->with('success', 'Logo Added successfully');
    }

    public function list_location(){
        $locations = Tbl_Content::where('name','location')->get();
        return view('location.index', compact('locations'));
    }

    public function location_create(){
        return view('location.create');
    }

    public function location_store(Request $request){
        $exist = Tbl_Content::where('slug','location')->first();
        if($exist != null){
            Tbl_Content::where('slug','location')->delete();
        }
        Tbl_Content::create([
            'name' => $request->input('name'),
            'slug' => \Str::slug($request->input('name')),
            'content'=> $request->input('content'),
        ]);
        return redirect()->route('location')->with('success', 'Location Added successfully');
    }
}
