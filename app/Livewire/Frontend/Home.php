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
            ->description("Admit Station a top consultancy firm in Bangladesh, We're your one-stop solution, whether you're searching for a study abroad consultancy firm near Banani or exploring options for studying abroad from Dhaka.")
            ->image(url('/assets/images/hero/hero-image-1.jpg'))
            ->url(url('/'))
            ->twitter();

        return view('livewire.frontend.home');
    }
}
