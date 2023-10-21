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

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['brand','type','family'])->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $types = Type::all();
        $families = Family::all();
        $models = PrinterModel::all();
        return view('products.create',compact('brands','types','families','models'));
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
                Rule::unique('products')->where(function ($query) use ($request) {
                    return $query->where('brand_id', $request->input('brand_id'));
                }),
            ],
            'brand_id' => 'required|integer',
            'family_id' => 'integer',
            'type_id' => 'integer',
            'price' => 'numeric|required',
            'description' => 'required',
        ]);
        $product = Product::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'family_id' => $request->input('family_id'),
            'type_id' => $request->input('type_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);
        foreach ($request->model_id as $key => $value) {
            ModelProduct::create([
                'product_id' => $product->id,
                'model_id' => $value,
            ]);
        }
        foreach ($request->image as $key => $value) {
            $extension = $value->getClientOriginalExtension();
            $filename = time().rand(1,50).'.' . $extension;
            $value->move(public_path('uploads/'), $filename);
            ImagesProduct::create([
                'product_id'=>$product->id,
                'image'=>'uploads/'.$filename,
            ]);
        }
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('brand', 'family', 'type','model')->findOrFail($id);
        return view('products.show', compact('product'));
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
        $product->model_id = DB::table('model_product')->where('product_id',$id)->pluck('model_id')->toArray();
        $brands = Brand::all();
        $types = Type::all();
        $families = Family::all();
        $models = PrinterModel::all();
        return view('products.edit', compact('product','brands','types','families','models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post_update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => [
                'required',
                Rule::unique('products')->where(function ($query) use ($request,$product) {
                    return $query->where('brand_id', $request->input('brand_id'))
                        ->where('id', '!=', $product->id);
                }),
            ],
            'brand_id' => 'required|integer',
            'family_id' => 'integer',
            'type_id' => 'integer',
            'price' => 'numeric|required',
            'description' => 'required',
        ]);

        $product->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'family_id' => $request->input('family_id'),
            'type_id' => $request->input('type_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);
        foreach ($request->model_id as $key => $value) {
            $check = ModelProduct::where('model_id',$value)->where('product_id',$id)->first();
            if($check == null){
                ModelProduct::create([
                    'product_id' => $product->id,
                    'model_id' => $value,
                ]);
            }
        }
        if($request->image[0] != null){
            foreach ($request->image as $key => $value) {
                $extension = $value->getClientOriginalExtension();
                $filename = time().rand(1,50).'.' . $extension;
                $value->move(public_path('uploads/'), $filename);
                ImagesProduct::create([
                    'product_id'=>$product->id,
                    'image'=>'uploads/'.$filename,
                ]);
            }
        }
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
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

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function restore($id)
    {
        // Restore Soft Deleted Type
        $product = Product::withTrashed()->findOrFail($id);
        $product->restore();

        return redirect()->route('products.index')->with('success', 'Product restored successfully.');
    }

    public function forceDelete($id)
    {
        // Force Delete (Permanently Delete) Soft Deleted Type
        $product = Product::withTrashed()->findOrFail($id);
        $product->forceDelete();

        return redirect()->route('products.index')->with('success', 'Product permanently deleted successfully.');
    }

    public function softDeleted()
    {
        $softDeletedType = Product::onlyTrashed()->get();

        return view('products.soft_deleted', compact('softDeletedType'));
    }

    public function images(){
        $images = ImagesProduct::join('products','products.id','images_product.product_id')->select('images_product.*','products.name')->get();
        return view('products.images_list',compact('images'));
    }

    public function images_destroy($id){
        ImagesProduct::where('id',$id)->delete();
        return redirect()->route('products.images')->with('success', 'Brand created successfully');
    }
}
