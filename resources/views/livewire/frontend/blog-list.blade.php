<div>
    <!-- event breadcrumb start -->
    <section class="tp-breadcrumb__area pt-50 pb-20 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg" data-background="{{ asset('assets/img/breadcrumb/breadcrumb-bg.jpg') }}"
            wire:ignore></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list pt-120">
                            <span><a href="{{ url('/') }}" wire:navigate><svg width="17" height="14"
                                        viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z"
                                            fill="currentColor" />
                                    </svg></a></span>
                            <span>Our Blog</span>
                        </div>
                        <h3 class="tp-breadcrumb__title white" style="color: #AB0C2F">Latest Blogs</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event breadcrumb end -->


    <!-- blog standard area -->
    <section class="tp-blog-standard-area p-relative pt-100 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tp-postbox-wrapper">
                        <div class="row">
                            @forelse ($blogs as $blog)
                                <div class="tp-postbox-item p-relative mb-40">
                                    <div class="tp-postbox-item-list-box d-flex align-items-center">
                                        <div class="tp-postbox-item-list-thumb">
                                            <a href="{{ route('blog-details', $blog->slug) }}" wire:navigate>
                                                <img class="course-pink" src="{{ asset($blog->image) }}" alt="" width="370px" height="270px" loading="lazy">
                                            </a>
                                        </div>

                                        <div class="tp-postbox-content">
                                            <div class="tp-blog-stories-tag-wrap d-flex">
                                                <a href="" wire:navigate>{{ $blog->category->name }}</a>
                                                <span>{{ $blog->created_at->format('F j, Y') }}</span>
                                            </div>
                                            <h3 class="tp-postbox-item-list-title" style="color: #AB0C2F">
                                                <a href="{{ route('blog-details', $blog->slug) }}"
                                                    wire:navigate>{{ $blog->title }}</a>
                                            </h3>
                                            <p>{{ Str::limit(strip_tags($blog->description), 150) }}</p>
                                            <div class="tp-postbox-btn">
                                                <a href="{{ route('blog-details', $blog->slug) }}" wire:navigate>Read More
                                                    <span><svg width="8" height="12" viewBox="0 0 8 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.5 11L6.5 6L1.5 1" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="tp-postbox-item p-relative mb-40">
                                    <div class="tp-postbox-item-list-thumb">
                                        <p>Empty.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="tp-event-inner-pagination tp-postbox-item-pagination">
                        <div class="tp-dashboard-pagination">
                            <div class="">
                                {{ $blogs->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="tp-sidebar-wrapper pl-55">
                        <!-- blog search -->
                        <div class="tp-sidebar-widgets mb-50">
                            <div class="tp-sidebar-content">
                                <div class="tp-sidebar-search p-relative">
                                    <form action="#">
                                        <input type="text" wire:model.live.debounce.250ms="search"
                                            placeholder="Search...">
                                        <button class="tp-sidebar-search-btn" type="submit">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path d="M13.3994 13.4004L16.9995 17.0005" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M15.3999 8.20019C15.3999 4.22363 12.1763 1 8.1997 1C4.22314 1 0.999512 4.22363 0.999512 8.20019C0.999512 12.1767 4.22314 15.4004 8.1997 15.4004C12.1763 15.4004 15.3999 12.1767 15.3999 8.20019Z"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- blog search end-->

                        @livewire('partials.blog-sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog standard area -->
</div>
