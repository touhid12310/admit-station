<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home | Admit-Station')]
class Home extends Component
{
    public $blogs;
    public function mount()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->take(2)->get();
    }
    public function render()
    {
        seo()
            ->title('Home | Admit-Station')
            ->description('Home | Admit-Station')
            ->twitter()
            ->image('/assets/images/hero/hero-image-1.jpg');

        return view('livewire.frontend.home');
    }
}
