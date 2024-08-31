<?php

namespace App\Livewire\Partials;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;

class BlogSidebar extends Component
{
    public function render()
    {
        
        $categories = BlogCategory::withCount('blogs')
            ->get(['name', 'blogs_count']);


        $recentBlogs = Blog::orderBy('id', 'desc')->where('status', 'Approved')->limit(3)->get();
        return view('livewire.partials.blog-sidebar',[
            'categories' => $categories,
            'recentBlogs' => $recentBlogs
        ]);
    }
}
