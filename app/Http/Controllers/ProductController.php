<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PrinterModel;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Family;
use Illuminate\Validation\Rule;

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
        return view('products.create',compact('brands','types','families'));
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
        Product::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'family_id' => $request->input('family_id'),
            'type_id' => $request->input('type_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

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
        $product = Product::with('brand', 'family', 'type')->findOrFail($id);
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
        $brands = Brand::all();
        $types = Type::all();
        $families = Family::all();
        return view('products.edit', compact('product','brands','types','families'));
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
}
