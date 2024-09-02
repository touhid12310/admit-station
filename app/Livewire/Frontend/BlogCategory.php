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

        return view('livewire.frontend.blog-category', [
            'blogs' => $blogs
        ]);
    }

    public function mount($category_id)
    {
        $this->category_id = $category_id;
    }
}
