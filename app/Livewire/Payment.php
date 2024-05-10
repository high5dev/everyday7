<?php

namespace App\Livewire;

use Livewire\Component;

class Payment extends Component
{
    public $name;
    
    public function render()
    {
        return view('livewire.payment');
    }
}
