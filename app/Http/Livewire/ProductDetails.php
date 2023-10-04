<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

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
}
