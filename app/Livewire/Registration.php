<?php

namespace App\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name;
    
    public function render()
    {
        return view('livewire.registration');
    }
}
