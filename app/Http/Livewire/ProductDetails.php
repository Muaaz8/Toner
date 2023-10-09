<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use Illuminate\Support\Facades\Cookie;


class ProductDetails extends Component
{
    public $prod_id;
    public $quantity = 1;


    public function mount($id){
        $this->prod_id = $id;
    }

    public function render()
    {
        $data = Product::with(['images','models.model','family','type'])->find($this->prod_id);
        return view('livewire.product-details',compact('data'));
    }

    public function increment(){
        $this->quantity++;
    }

    public function decrement(){
        $this->quantity--;
    }

    public function add_to_cart($val)
    {
        if (Auth::check()) {
            $product = Product::findorfail($val);
            $check = Cart::where('user_id', Auth::user()->id)->where('product_id', $val)->where('status', 'pending')->first();
            if ($check != null) {
                $check->quantity += $this->quantity;
                $check->save();
            } else {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $val,
                    'price' => $product->price,
                    'quantity' => $this->quantity,
                    'status' => 'pending',
                ]);
            }
            $this->emitTo('side-cart', 'refreshComponent');
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
                        $cart_data[$keys]["quantity"]+= $this->quantity;
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
                        'quantity' => $this->quantity,
                        'status' => 'pending',
                    );
                    $cart_data[] = $item_array;

                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                }
            }
        }
        $this->emit('side-cart-open');
        $this->emitTo('side-cart', 'refreshComponent');
    }

    public function buy_now($id){
        $this->add_to_cart($id);
        return redirect()->to('/checkout');
    }
}
