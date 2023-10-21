<?php

namespace App\Http\Livewire;

use App\Http\Controllers\FilterController;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Family;
use App\Models\PrinterModel;
use App\Models\Product;
use App\Models\Type;
use Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Request;

class HomeProduct extends Component
{

    public $selected_brand_id = '';
    public $selected_type_id = '';
    public $selected_family_id = '';
    public $selected_model_id = '';

    public function render()
    {
        $brands = Brand::all();
        if ($this->selected_brand_id != '') {
            if ($this->selected_type_id != '') {
                if ($this->selected_family_id != '') {
                    $types = FilterController::filterByBrand($this->selected_brand_id)['types'];
                    $families = FilterController::filterByType($this->selected_type_id)['families'];
                    $filtered = FilterController::filterByFamily($this->selected_family_id);
                    $models = $filtered['models'];
                    $products = $filtered['products'];
                } else {
                    $types = FilterController::filterByBrand($this->selected_brand_id)['types'];
                    $filtered = FilterController::filterByType($this->selected_type_id);
                    $families = $filtered['families'];
                    $models = $filtered['models'];
                    $products = $filtered['products'];
                }
            } else {
                $filtered = FilterController::filterByBrand($this->selected_brand_id);
                $types = $filtered['types'];
                $families = $filtered['families'];
                $models = $filtered['models'];
                $products = $filtered['products'];
            }
        } else {
            $types = [];
            $families = [];
            $models = [];
            if(Request::path() != "all_product"){
                $products = Product::with('images')->limit(4)->get();
            }else{
                $products = Product::with('images')->get();
            }
        }
        return view('livewire.home-product', compact('brands', 'types', 'families', 'models', 'products'));
    }

    public function add_to_cart($val)
    {
        if (Auth::check()) {
            $product = Product::findorfail($val);
            $check = Cart::where('user_id', Auth::user()->id)->where('product_id', $val)->where('status', 'pending')->first();
            if ($check != null) {
                $check->quantity += 1;
                $check->save();
            } else {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $val,
                    'price' => $product->price,
                    'quantity' => 1,
                    'status' => 'pending',
                ]);
            }
            $data = Cart::where('user_id', Auth::user()->id)->where('status', 'pending')->count();
        } else {
            $prod_id = $val;
            $quantity = 1;

            if (Cookie::get('shopping_cart')) {
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $cart_data = json_decode($cookie_data, true);
            } else {
                $cart_data = array();
            }

            $item_id_list = array_column($cart_data, 'product_id');
            $prod_id_is_there = $prod_id;

            if (in_array($prod_id_is_there, $item_id_list)) {
                foreach ($cart_data as $keys => $values) {
                    if ($cart_data[$keys]["product_id"] == $prod_id) {
                        $cart_data[$keys]["quantity"]++;
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    }
                }
            } else {
                $products = Product::find($prod_id);

                if ($products) {
                    $item_array = array(
                        'user_id' => null,
                        'product_id' => $val,
                        'price' => $products->price,
                        'quantity' => 1,
                        'status' => 'pending',
                    );
                    $cart_data[] = $item_array;

                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                }
            }
            $data = count($cart_data);
        }
        $this->emit('side-cart-open',$data);
        $this->emitTo('side-cart', 'refreshComponent');
    }
}
