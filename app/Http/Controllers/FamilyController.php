<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FamilyController extends Controller
{
    public function index()
    {
        $families = Family::with('brand', 'type')->get();
        return view('families.index', compact('families'));
    }


    public function create()
    {
        return view('families.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('families')->where(function ($query) use ($request) {
                    return $query->where('brand_id', $request->input('brand_id'));
                }),
            ],
            'brand_id' => 'required|integer',
            'type_id' => 'required|integer',
        ]);

        Family::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'type_id' => $request->input('type_id'),
        ]);

        return redirect()->route('families.index')->with('success', 'Family created successfully');
    }

    public function show($id)
    {
        $family = Family::with('brand', 'type')->findOrFail($id);
        return view('families.show', compact('family'));
    }

    public function edit($id)
    {
        $family = Family::findOrFail($id);
        return view('families.edit', compact('family'));
    }

    public function update(Request $request, $id)
    {
        $family = Family::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                Rule::unique('families')->where(function ($query) use ($request, $family) {
                    return $query->where('brand_id', $request->input('brand_id'))
                        ->where('id', '!=', $family->id); // Exclude the current family's ID
                }),
            ],
            'brand_id' => 'required|integer',
            'type_id' => 'required|integer',
        ]);

        $family->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'type_id' => $request->input('type_id'),
        ]);

        return redirect()->route('families.index')->with('success', 'Family updated successfully');
    }

    public function destroy($id)
    {
        $family = Family::findOrFail($id);

        // Soft delete the family
        $family->delete();

        return redirect()->route('families.index')->with('success', 'Family deleted successfully');
    }
}
