<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.page-header');
    }
}
