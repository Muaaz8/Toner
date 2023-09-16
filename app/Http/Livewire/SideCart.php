<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Auth;
use DB;

class SideCart extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

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
        return view('livewire.side-cart',compact('data','total'));
    }

    public function increment($id){
        $check = Cart::findOrFail($id);
        $check->quantity += 1;
        $check->save();
    }

    public function decrement($id){
        $check = Cart::findOrFail($id);
        if($check->quantity == 1){
            $check->delete();
        }else{
            $check->quantity -= 1;
            $check->save();
        }
    }

    public function remove($id){
        $check = Cart::findOrFail($id);
        $check->delete();
    }
}
