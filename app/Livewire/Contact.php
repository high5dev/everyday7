<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{

    public $title;
    public $description;

    public function mount() {
        $this->title = 'Contact';
        $this->description = "Smelly farts bruh...";
    }
    
    public function render()
    {
        return view('livewire.contact');
    }
}
