<?php

use Carbon\Carbon;
use App\Livewire\About;
use App\Livewire\Community;
use App\Livewire\Contact;
use App\Livewire\Classes;
use App\Livewire\Events;
use App\Livewire\EventDetail;
use App\Livewire\Join;
use App\Livewire\Resources;
use App\Livewire\Lander;
use App\Livewire\Practitioners;
use App\Livewire\PractitionerDetail;
use Livewire\Component;

Route::get('/', Lander::class);
Route::get('about', About::class);
Route::get('community', Community::class);
Route::get('contact', Contact::class);
Route::get('classes', Classes::class);
Route::get('events', Events::class);
Route::get('events/{slug}', EventDetail::class);
Route::get('join', Join::class);
Route::get('resources', Resources::class);
Route::get('practitioners', Practitioners::class);
Route::get('practitioners/{slug}', PractitionerDetail::class);