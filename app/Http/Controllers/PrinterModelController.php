<?php

namespace App\Http\Controllers;

use App\Models\PrinterModel;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PrinterModelController extends Controller
{
    public function index()
    {
        $models = PrinterModel::with('brand', 'family', 'type')->get();
        return view('models.index', compact('models'));
    }

    public function create()
    {
        $brands = Brand::all();
        $types = Type::all();
        $families = Family::all();
        return view('models.create',compact('brands','types','families'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('printer_models')->where(function ($query) use ($request) {
                    return $query->where('brand_id', $request->input('brand_id'));
                }),
            ],
            'brand_id' => 'required|integer',
            'family_id' => 'integer',
            'type_id' => 'integer',
        ]);

        PrinterModel::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'family_id' => $request->input('family_id'),
            'type_id' => $request->input('type_id'),
        ]);

        return redirect()->route('models.index')->with('success', 'Model created successfully');
    }

    public function show($id)
    {
        $model = PrinterModel::with('brand', 'family', 'type')->findOrFail($id);
        return view('models.show', compact('model'));
    }

    public function edit($id)
    {
        $model = PrinterModel::findOrFail($id);
        $brands = Brand::all();
        $types = Type::all();
        $families = Family::all();
        return view('models.edit', compact('model','brands','types','families'));
    }

    public function update(Request $request, $id)
    {
        $model = PrinterModel::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                Rule::unique('printer_models')->where(function ($query) use ($request, $model) {
                    return $query->where('brand_id', $request->input('brand_id'))
                        ->where('id', '!=', $model->id); // Exclude the current model's ID
                }),
            ],
            'brand_id' => 'required|integer',
            'family_id' => 'integer',
            'type_id' => 'integer',
        ]);

        $model->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('brand_id'),
            'family_id' => $request->input('family_id'),
            'type_id' => $request->input('type_id'),
        ]);

        return redirect()->route('models.index')->with('success', 'Model updated successfully');
    }

    public function destroy($id)
    {
        $model = PrinterModel::findOrFail($id);

        // Soft delete the model
        $model->delete();

        return redirect()->route('models.index')->with('success', 'Model deleted successfully');
    }
}
