<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Blog Details | Admit-Station')]
class BlogDetails extends Component
{
    public function render()
    {
        return view('livewire.frontend.blog-details');
    }
}
