<?php

namespace App\Http\Controllers;

use App\Models\Type;
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
        return view('types.create');
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
        return view('types.edit', compact('type'));
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
}
