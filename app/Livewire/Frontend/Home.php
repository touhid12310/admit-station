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
        $this->blogs = Blog::orderBy('id', 'desc')->where('status', 'Approved')->take(2)->get();
    }
    public function render()
    {
        seo()
            ->title('Home | Admit-Station')
            ->description("Welcome to Admit Station, your trusted partner in navigating the path to studying abroad. We provide comprehensive guidance on admissions, scholarships, and part-time work permits for top universities worldwide. Whether you're a student in Banani, Dhaka, or beyond, our expert team is here to help you achieve your academic goals. Explore our website to find the latest insights and resources tailored to your educational journey. Take the first step towards studying at world-class institutions with Admit Station, where your future starts today.")
            ->image(url('/assets/images/hero/hero-image-1.jpg'))
            ->url(url('/'))
            ->twitter();

        return view('livewire.frontend.home');
    }
}
