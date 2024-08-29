<?php

namespace App\Livewire\Frontend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Blogs | Admit-Station')]
class BlogList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $rows = 5;

    public function render()
    {   
        
        if($this->search){
            $blogs = Blog::where('status', 'Approved')->where('title', 'like', '%'.$this->search.'%')
            ->orWhere('title', 'like', '%'.$this->search.'%')
          
            ->orderBy('id', 'desc')->paginate($this->rows);
            
        }else{
            $blogs = Blog::orderBy('id', 'desc')->where('status', 'Approved')->paginate($this->rows);
        }
      
        return view('livewire.frontend.blog-list',[
            'blogs' => $blogs
        ]);
    }
}
