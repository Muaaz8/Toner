<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginModal extends Component
{
    protected $listeners = ['showModal' => 'showModal'];

    public $modal = false;

    public function render()
    {
        return view('livewire.login-modal');
    }

    public function showModal(){
        $this->modal = true;
        $this->dispatchBrowserEvent('openModal');
    }
}
