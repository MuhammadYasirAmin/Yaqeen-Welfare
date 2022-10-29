<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class EventsDetails extends Component
{
    public function render()
    {
        return view('livewire.frontend.events-details')->layout('layouts.main');
    }
}
