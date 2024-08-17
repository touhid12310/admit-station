<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Blogs | Admit-Station')]
class BlogList extends Component
{
    public function render()
    {
        return view('livewire.frontend.blog-list');
    }
}
