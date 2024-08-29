<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Home | Admit-Station')]
class Home extends Component
{
    public $blogs;
    public function mount(){
        $this->blogs = Blog::orderBy('id', 'desc')->take(2)->get();
    }
    public function render()
    {
        return view('livewire.frontend.home');
    }
}
