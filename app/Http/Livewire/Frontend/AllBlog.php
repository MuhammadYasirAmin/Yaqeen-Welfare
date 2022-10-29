<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class AllBlog extends Component
{
    public function render()
    {
        return view('livewire.frontend.all-blog')->layout('layouts.main');
    }
}
