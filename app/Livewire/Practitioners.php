<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Practitioner;

class Practitioners extends Component
{
    public $practitioners;
    public $title;

    public function mount() {
        $this->practitioners = Practitioner::all();
    }
    
    public function render()
    {
        $this->title = 'Practitioners';
        
        return view('livewire.practitioners', ['practitioners' => $this->practitioners, 'title' => $this->title]);
    }
}
