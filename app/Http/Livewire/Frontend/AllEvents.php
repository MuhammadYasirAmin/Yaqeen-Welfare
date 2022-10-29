<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class AllEvents extends Component
{
    public function render()
    {
        return view('livewire.frontend.all-events')->layout('layouts.main');
    }
}
