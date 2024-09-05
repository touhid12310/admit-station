<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

#[Title('Blogs-Category | Admit-Station')]
class BlogCategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $rows = 5;
    public $category_id;


    public function render()
    {

        if ($this->search) {
            $blogs = Blog::with('category')->where('status', 'Approved')->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('title', 'like', '%' . $this->search . '%')
                ->orderBy('id', 'desc')->paginate($this->rows);
        } else {
            $blogs = Blog::with('category')->where('blog_category_id', $this->category_id)->orderBy('id', 'desc')->where('status', 'Approved')->paginate($this->rows);
        }

        seo()
            ->title('Blog Category | Admit-Station')
            ->description("Explore a wide range of categories in our blog, covering essential topics for students aspiring to study abroad. From detailed guides on university admissions and scholarship opportunities to tips on obtaining part-time work permits, our blog categories provide focused insights to help you make informed decisions. Dive into the content that matters most to your educational journey and discover valuable resources tailored to your specific needs.")
            ->image(url('/assets/images/hero/hero-image-1.jpg'))
            ->url(url()->current())
            ->twitter();

        return view('livewire.frontend.blog-category', [
            'blogs' => $blogs
        ]);
    }

    public function mount($category_id)
    {
        $this->category_id = $category_id;
    }
}
