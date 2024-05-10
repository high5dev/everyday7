<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventDetail extends Component
{
    public $slug;
    public $event;

    public function mount($slug) {

        $this->slug = $slug;
        $this->event = Event::where('slug',$slug)->first();

    }
    
    public function render()
    {
        return view('livewire.event-detail', ['slug' => $this->slug, 'e' => $this->event]);
    }
}
