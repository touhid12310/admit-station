<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Blogs | Admit-Station')]
class Blogs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $rows = 5;

    public function render()
    {

        if ($this->search) {
            $blogs = Blog::where('status', 'Approved')->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('title', 'like', '%' . $this->search . '%')
                ->orderBy('id', 'desc')->paginate($this->rows);
        } else {
            $blogs = Blog::orderBy('id', 'desc')->where('status', 'Approved')->orderBy('id', 'desc')->paginate($this->rows);
        }

        seo()
            ->title('Blogs | Admit-Station')
            ->description("Stay informed with Admit Station’s latest blogs, covering everything you need to know about studying abroad. Explore admissions processes at top universities, scholarship opportunities, and part-time work permits that allow you to gain experience while studying. Whether you're seeking guidance on entering prestigious schools or learning about work-study options, our blog is your gateway to the best educational institutions worldwide. With accurate and up-to-date information, we’re here to help you every step of the way. Start your educational journey with us today!")
            ->image(url('/assets/images/hero/hero-image-1.jpg'))
            ->url(url()->current())
            ->twitter();


        return view('livewire.frontend.blog-list', [
            'blogs' => $blogs
        ]);
    }
}
