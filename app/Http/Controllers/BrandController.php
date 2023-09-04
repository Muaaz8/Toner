<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands,name', // Ensure name is required and unique
        ]);

        // Create and save the brand
        Brand::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('brands.index')->with('success', 'Brand created successfully');
    }

    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brands.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:brands,name,' . $id, // Ensure name is required and unique, excluding the current brand
        ]);

        // Find the brand and update its name
        $brand = Brand::find($id);
        $brand->name = $request->input('name');
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        // Soft delete the brand
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully');
    }
}
