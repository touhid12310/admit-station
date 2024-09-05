<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Blog Details | Admit-Station')]
class BlogDetails extends Component
{
    public $blog;


    public function mount($slug)
    {
        $this->blog = Blog::where('slug', $slug)->first();
    }
    public function render()
    {

        seo()
            ->title($this->blog->title . ' | Admit-Station')
            ->description(strip_tags(substr($this->blog->description, 0, 200)).'...')
            ->image(asset($this->blog->image))
            ->url(url()->current())
            ->twitter();

        return view('livewire.frontend.blog-details');
    }
}
