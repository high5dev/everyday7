<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Practitioner;

class PractitionerDetail extends Component
{

    public $name;
    public $title;
    public $description;
    public $slug;
    public $practitioner;

    public function mount($slug) {

        $this->practitioner = Practitioner::where('slug',$slug)->first();
    }

    public function render()
    {
        return view('livewire.practitioner-detail', ['p' => $this->practitioner]);
    }
}
