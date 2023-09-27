<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetails extends Component
{
    public $prod_id;

    public function mount($id){
        $this->prod_id = $id;
    }

    public function render()
    {
        $data = Product::with('images')->find($this->prod_id);
        return view('livewire.product-details',compact('data'));
    }
}
