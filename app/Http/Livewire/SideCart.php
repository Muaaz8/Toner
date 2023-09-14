<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class SideCart extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        $data = Cart::all();
        return view('livewire.side-cart',compact('data'));
    }
}
