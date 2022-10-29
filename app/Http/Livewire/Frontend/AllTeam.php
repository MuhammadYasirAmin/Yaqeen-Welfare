<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class AllTeam extends Component
{
    public function render()
    {
        return view('livewire.frontend.all-team')->layout('layouts.main');
    }
}
