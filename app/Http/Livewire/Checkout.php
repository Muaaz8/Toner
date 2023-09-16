<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Auth;
use DB;

class Checkout extends Component
{
    public function render()
    {
        if(Auth::check()){
            $data = Cart::with(['products','products.images'])->where('user_id',auth()->user()->id)->get();
            $total = Cart::where('user_id', auth()->user()->id)
            ->select(DB::raw('SUM(quantity * price) as total'))
            ->value('total');
        }else{
            $data = [];
            $total = 0;
        }
        return view('livewire.checkout',compact('data','total'))->layout('shopping_cart');
    }
}
