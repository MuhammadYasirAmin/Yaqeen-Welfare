<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class BlogDetails extends Component
{
    public function render()
    {
        return view('livewire.frontend.blog-details')->layout('layouts.main');
    }
}
