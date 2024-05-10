<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $title;
    
    public function render()
    {
        $this->title = 'About';
        return view('livewire.about', ['title' => $this->title]);
    }
}
