<?php

namespace App\Livewire;

use Livewire\Component;

class Join extends Component
{
    public $title = 'Welcome';
    public $description = "";

    public function render()
    {
        return view('livewire.join');
    }
}
