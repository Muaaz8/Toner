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

class SpecialProducts extends Component
{
    public function render()
    {
        $products = Product::where('brand_id',null)->get();
        return view('livewire.special-products',compact('products'));
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
