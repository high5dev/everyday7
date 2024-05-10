<?php

namespace App\Livewire;

use Livewire\Component;

class Hero extends Component
{

    public $name;

    public function render()
    {
        return view('livewire.hero');
    }
}
