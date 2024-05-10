<?php

namespace App\Livewire;

use Livewire\Component;

class Availability extends Component
{
    public $name;
    
    public function render()
    {
        return view('livewire.availability');
    }
}
