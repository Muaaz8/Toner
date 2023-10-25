<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PrinterModel;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Family;
use App\Models\ModelProduct;
use App\Models\ImagesProduct;
use Illuminate\Validation\Rule;
use DB;

class SpecialProductController extends Controller
{
    public function index()
    {
        $products = Product::where('brand_id',null)->get();
        return view('special_products.index', compact('products'));
    }

    public function create()
    {
        return view('special_products.create');
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
            'name' => [
                'required',
            ],
            'price' => 'numeric|required',
            'description' => 'required',
            'stocks' => 'required',
        ]);
        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'stocks' => $request->input('stocks'),
        ]);
        foreach ($request->image as $key => $value) {
            $extension = $value->getClientOriginalExtension();
            $filename = time().rand(1,50).'.' . $extension;
            $value->move(public_path('uploads/'), $filename);
            ImagesProduct::create([
                'product_id'=>$product->id,
                'image'=>'uploads/'.$filename,
            ]);
        }
        return redirect()->route('special_products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('brand_id',null)->findOrFail($id);
        return view('special_products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('special_products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => [
                'required',
            ],
            'price' => 'numeric|required',
            'description' => 'required',
            'stocks' => 'required',
        ]);

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'stocks' => $request->input('stocks'),
        ]);
        // if(isset($request->image)){
        //     foreach ($request->image as $key => $value) {
        //         $extension = $value->getClientOriginalExtension();
        //         $filename = time().rand(1,50).'.' . $extension;
        //         $value->move(public_path('uploads/'), $filename);
        //         ImagesProduct::create([
        //             'product_id'=>$product->id,
        //             'image'=>'uploads/'.$filename,
        //         ]);
        //     }
        // }
        return redirect()->route('special_products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Soft delete the product
        $product->delete();

        return redirect()->route('special_products.index')->with('success', 'Product deleted successfully');
    }

    public function restore($id)
    {
        // Restore Soft Deleted Type
        $product = Product::withTrashed()->findOrFail($id);
        $product->restore();

        return redirect()->route('special_products.index')->with('success', 'Product restored successfully.');
    }

    public function forceDelete($id)
    {
        // Force Delete (Permanently Delete) Soft Deleted Type
        $product = Product::withTrashed()->findOrFail($id);
        $product->forceDelete();

        return redirect()->route('special_products.index')->with('success', 'Product permanently deleted successfully.');
    }

    public function softDeleted()
    {
        $softDeletedType = Product::onlyTrashed()->get();

        return view('special_products.soft_deleted', compact('softDeletedType'));
    }

    public function images(){
        $images = ImagesProduct::join('products','products.id','images_product.product_id')->select('images_product.*','products.name')->get();
        return view('special_products.images_list',compact('images'));
    }

    public function images_destroy($id){
        ImagesProduct::where('id',$id)->delete();
        return redirect()->route('special_products.images')->with('success', 'Brand created successfully');
    }
}
