<?php

namespace App\Livewire;

use Livewire\Component;

class Classes extends Component
{
    public $title;
    public $description;

    public function render()
    {
        $this->title = "Classes";

        return view('livewire.classes', ['title' => $this->title]);
    }
}
