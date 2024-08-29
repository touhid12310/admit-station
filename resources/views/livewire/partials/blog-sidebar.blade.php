<div>
   <div class="tp-sidebar-widget mb-50">
      <div class="tp-sidebar-content">
         <h5 class="tp-sidebar-widget-title" style="color: #AB0C2F">Categories</h5>
         <ul>
            @foreach ($categories as $category)
               <li><a href="" wire:navigate>{{$category->name }} <span>(0)</span></a></li>
            @endforeach
         </ul>
      </div>
   </div>
   <div class="tp-sidebar-widget mb-50">

      <h5 class="tp-sidebar-widget-title" style="color: #AB0C2F">Recent Posts</h5>
      @foreach ($recentBlogs as $recentBlog)
         <div class="tp-recent-post-content">
            <span class="tp-recent-post-span">{{$recentBlog->category->name}}</span>
            <h5 class="tp-recent-post-title"><a href="{{ route('blog-details', $recentBlog->slug) }}" wire:navigate>{{$recentBlog->title}}</a></h5>
            <div class="tp-recent-post-tag">
               <span>{{($recentBlog->created_at)->format('F j, Y') }}</span>
               <span>Minute</span>
            </div>
         </div>
      @endforeach
      
   </div>
   <div class="tp-sidebar-widget mb-50">
      <div class="tp-sidebar-content">
         <h5 class="tp-sidebar-widget-title" style="color: #AB0C2F">Tag</h5>
         <div class="tagcloud">
            <a href="#">News</a>
            <a href="#">Counseling</a>
            <a href="#">Career</a>
            <a href="#">Software</a>
            <a href="#">Development</a>
            <a href="#">Merket</a>
            <a href="#">Life</a>
            <a href="#">Research</a>
            <a href="#">Research</a>
            <a href="#">UI Design</a>
            <a href="#">Team</a>
         </div>
      </div>
   </div>
</div>
