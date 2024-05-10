<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Event;

class Events extends Component
{
    public $title;
    public $description;
    public $events;

    public function render()
    {
        $this->title = "Events";
        $this->events = Event::where('start', '>', Carbon::now())->get();

        return view('livewire.events', ['title' => $this->title, 'events' => $this->events]);
    }
}
