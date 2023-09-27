<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDetails extends Component
{
    public $prod_id;

    public function mount($id){
        $this->prod_id = $id;
    }

    public function render()
    {
        return view('livewire.product-details');
    }
}
