<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Family;
use App\Models\PrinterModel;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use App\Http\Controllers\FilterController;

class HomeProduct extends Component
{

    public $selected_brand_id = '';
    public $selected_type_id = '';
    public $selected_family_id = '';
    public $selected_model_id = '';

    public function render()
    {
        $brands = Brand::all();
        if($this->selected_brand_id != ''){
            if($this->selected_type_id != ''){
                if($this->selected_family_id != ''){
                    $types = FilterController::filterByBrand($this->selected_brand_id)['types'];
                    $families = FilterController::filterByType($this->selected_type_id)['families'];
                    $filtered = FilterController::filterByFamily($this->selected_family_id);
                    $models = $filtered['models'];
                    $products = $filtered['products'];
                }
                else{
                    $types = FilterController::filterByBrand($this->selected_brand_id)['types'];
                    $filtered = FilterController::filterByType($this->selected_type_id);
                    $families = $filtered['families'];
                    $models = $filtered['models'];
                    $products = $filtered['products'];
                }
            }else{
                $filtered = FilterController::filterByBrand($this->selected_brand_id);
                $types = $filtered['types'];
                $families = $filtered['families'];
                $models = $filtered['models'];
                $products = $filtered['products'];
            }
        }else{
            $types = Type::all();
            $families = Family::all();
            $models = PrinterModel::all();
            $products = Product::with('images')->limit(4)->get();
        }
        return view('livewire.home-product',compact('brands','types','families','models','products'));
    }


    public function add_to_cart($val){
        if(Auth::check()){
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $val,
                'price' => 5.22,
                'quantity' => 1,
                'status' => 'pending',
            ]);
        }else{
            dd('not logged in.');
        }
        $this->emitTo('side-cart', 'refreshComponent');
    }
}
