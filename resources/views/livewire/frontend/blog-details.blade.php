<div>
     <!-- event breadcrumb start -->
     <div class="tp-breadcrumb__area pt-150 pb-15 p-relative z-index-1 fix">
      <div class="tp-breadcrumb__bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb-bg.jpg') }}"
      wire:ignore></div>
        <div class="container">
           <div class="row align-items-center">
              <div class="col-sm-12">
                 <div class="tp-breadcrumb__content">
                    <div class="tp-breadcrumb__list">
                       <span><a href="{{ url('/') }}" wire:navigate><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                       </svg></a></span>
                       <span>{{$blog->category->name}}</span>
                    </div>
                    <h3 class="tp-breadcrumb__title white" style="color: #AB0C2F">{{$blog->title}}</h3>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <!-- event breadcrumb end -->


     <!-- blog details area -->
     <section class="tp-blog-details-p p-relative pt-80 pb-120">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 {{-- <div class="tp-blog-details-wrap">
                    <div class="tp-blog-stories-tag-wrap">
                       <a href="#">{{$blog->category->name}}</a>
                    </div>
                    <h4 class="tp-blog-details-title" style="color: #AB0C2F">{{$blog->title}}.</h4>
                    <div class="tp-blog-details-user d-flex justify-content-between">
                       <div class="tp-blog-details-user-box">
                          <span><img src="assets/img/blog/blog-stories/blog-stories-user-2.jpg" alt=""> Eleanor Pena</span>
                          <span>{{($blog->created_at)->format('F j, Y') }}</span>
                       </div>
                       <div class="tp-blog-details-user-social">
                          <div class="tp-postbox-details-social text-end">
                             <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                             <a href="#"><i class="fa-brands fa-twitter"></i></a>
                             <a href="#"><i class="fa-solid fa-link"></i></a>
                          </div>
                       </div>
                    </div>
                 </div> --}}
              </div>

              <div class="col-lg-8">
                 <div class="tp-postbox-wrapper">
                     <div class="tp-postbox-details-thumb pb-60">
                        <img wire:ignore src="{{asset($blog->image)}}" alt="" width="100%" height="80%">
                     </div>
                    <div class="tp-postbox-details-text">
                       <p class="tp-dropcap text-1">{!! $blog->description !!}</p>
                    </div>
                 </div>
              </div>

              <div class="col-lg-4">
                 <div class="tp-sidebar-wrapper pl-55">
                    @livewire('partials.blog-sidebar')
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- blog details area -->
</div>
