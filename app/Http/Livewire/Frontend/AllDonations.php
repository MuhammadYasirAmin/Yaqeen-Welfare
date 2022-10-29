<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class AllDonations extends Component
{
    public function render()
    {
        return view('livewire.frontend.all-donations')->layout('layouts.main');
    }
}
