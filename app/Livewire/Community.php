<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Plan;

class Community extends Component
{
    public $title;
    public $description;
    public $plans;

    public function render()
    {
        $this->title = "Community";
        $this->plans = Plan::all();
        
        return view('livewire.community');
    }
}
