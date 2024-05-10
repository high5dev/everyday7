<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Resource;

class Resources extends Component
{
    public $title;
    public $description;
    public $resources;

    public function render()
    {
        $this->title = "Resources";

        $this->resources = Resource::all();

        return view('livewire.resources', ['title' => $this->title]);
    }
}
