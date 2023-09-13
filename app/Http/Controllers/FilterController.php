<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrinterModel;
use App\Models\Type;
use App\Models\Family;
use App\Models\Brand;

class FilterController extends Controller
{
    public function filterByBrand($brandId)
    {
        $brand = Brand::findOrFail($brandId);

        // Get all types directly associated with the brand
        $brandTypes = $brand->types;

        // Get all families directly associated with the brand
        $brandFamilies = $brand->families;

        // Get all families associated with the brand through its types
        $typesFamilies = $brand->types->flatMap(function ($type) {
            return $type->families;
        });

        // Merge all families
        $allFamilies = $brandFamilies->merge($typesFamilies)->unique();

        // Get all models directly associated with the brand
        $brandModels = $brand->models;

        // Get all models associated with the brand through its types and families
        $typesModels = $brand->types->flatMap(function ($type) {
            return $type->models;
        });
        $familiesModels = $allFamilies->flatMap(function ($family) {
            return $family->models;
        });

        // Merge all models
        $allModels = $brandModels->merge($typesModels)->merge($familiesModels)->unique();

        $brandProducts = $brand->products;

        // // Get all brands associated with the brand through its types and families
        // $typesBrands = $brand->types->flatMap(function ($type) {
        //     return $type->brands;
        // });
        // $familiesBrands = $allFamilies->flatMap(function ($family) {
        //     return $family->brands;
        // });

        // // Merge all brands
        // $allBrands = $typesBrands->merge($familiesBrands)->unique();

        return [
            'types' => $brandTypes,
            'families' => $allFamilies,
            'models' => $allModels,
            'products' => $brandProducts,
        ];
    }


    public function filterByType($typeId)
    {
        $type = Type::findOrFail($typeId);

        // Get all families directly associated with the type
        $typeFamilies = $type->families;

        // Get all models directly associated with the type
        $typeModels = $type->models;

        // Get all models associated with the type through its families
        $familyModels = $type->families->flatMap(function ($family) {
            return $family->models;
        });

        // Merge all models
        $allModels = $typeModels->merge($familyModels)->unique();

        $typeProducts = $type->products;

        return [
            'families' => $typeFamilies,
            'models' => $allModels,
            'products' => $typeProducts,
        ];
    }

    public function filterByFamily($familyId)
    {
        $family = Family::findOrFail($familyId);

        // Get all models directly associated with the family
        $familyModels = $family->models;

        $familyProducts = $family->products;

        return [
            'models' => $familyModels,
            'products' => $familyProducts,
        ];
    }
}
