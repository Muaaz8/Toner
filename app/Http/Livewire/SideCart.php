<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Auth;
use DB;
use Illuminate\Support\Facades\Cookie;

class SideCart extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        if(Auth::check()){
            $data = Cart::with(['products','products.images'])->where('user_id',auth()->user()->id)->where('status','pending')->get();
            $total = Cart::where('user_id', auth()->user()->id)
            ->where('status','pending')
            ->select(DB::raw('SUM(quantity * price) as total'))
            ->value('total');
        }else{
            if(Cookie::get('shopping_cart')){
                $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                $data = json_decode($cookie_data);
                $total = 0;
                foreach ($data as $key => $value) {
                    $value->products = Product::with('images')->where('id',$value->product_id)->first();
                    $total += ($value->quantity*$value->price);
                }
            }else{
                $data = [];
                $total = 0;
            }
        }
        return view('livewire.side-cart',compact('data','total'));
    }

    public function increment($id){
        if(Auth::check()){
            $check = Cart::findOrFail($id);
            $check->quantity += 1;
            $check->save();
        }else{
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data);
            $cart_data[$id]->quantity++;
            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            $this->emit('refreshComponent');
        }
    }

    public function decrement($id){
        if(Auth::check()){
            $check = Cart::findOrFail($id);
            if($check->quantity == 1){
                $check->delete();
            }else{
                $check->quantity -= 1;
                $check->save();
            }
        }else{
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data);
            if($cart_data[$id]->quantity == 1){
                unset($cart_data[$id]);
                $cart_data = array_values($cart_data);
            }else{
                $cart_data[$id]->quantity--;
            }
            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            $this->emit('refreshComponent');
        }
    }

    public function remove($id){
        if(Auth::check()){
            $check = Cart::findOrFail($id);
            $check->delete();
        }else{
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data);
            unset($cart_data[$id]);
            $cart_data = array_values($cart_data);
            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            $this->emit('refreshComponent');
        }
    }
}
