<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::with(['brand'])->get();
        return view('types.index', compact('types'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('types.create',compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('types')->where(function ($query) use ($request) {
                    return $query->where('brand_id', $request->input('brand_id'));
                }),
            ],
            'brand_id' => 'required|integer',
        ]);

        Type::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
        ]);

        return redirect()->route('types.index')->with('success', 'Type created successfully');
    }

    public function show($id)
    {
        $type = Type::with(['brand'])->findOrFail($id);
        return view('types.show', compact('type'));
    }


    public function edit($id)
    {
        $type = Type::findOrFail($id);
        $brands = Brand::all();
        return view('types.edit', compact('type','brands'));
    }

    public function update(Request $request, $id)
    {
        $type = Type::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                Rule::unique('types')->where(function ($query) use ($request, $type) {
                    return $query->where('brand_id', $request->input('brand_id'))
                        ->where('id', '!=', $type->id); // Exclude the current type's ID
                }),
            ],
            'brand_id' => 'required|integer',
        ]);

        $type->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
        ]);

        return redirect()->route('types.index')->with('success', 'Type updated successfully');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);

        // Soft delete the type
        $type->delete();

        return redirect()->route('types.index')->with('success', 'Type deleted successfully');
    }

    public function restore($id)
    {
        // Restore Soft Deleted Type
        $type = Type::withTrashed()->findOrFail($id);
        $type->restore();

        return redirect()->route('types.index')->with('success', 'Type restored successfully.');
    }

    public function forceDelete($id)
    {
        // Force Delete (Permanently Delete) Soft Deleted Type
        $type = Type::withTrashed()->findOrFail($id);
        $type->forceDelete();

        return redirect()->route('types.index')->with('success', 'Type permanently deleted successfully.');
    }

    public function softDeleted()
    {
        $softDeletedType = Type::onlyTrashed()->get();

        return view('type.soft_deleted', compact('softDeletedType'));
    }

    public function getSoftDeleted($id)
    {
        $softDeletedType = Type::onlyTrashed()->findOrFail($id);

        return view('types.soft_deleted_detail', compact('softDeletedType'));
    }
}
