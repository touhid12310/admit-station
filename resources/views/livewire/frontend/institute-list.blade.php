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
                            <span> Choose Your</span>
                        </div>
                        <h3 class="tp-breadcrumb__title" style="color: #AB0C2F">Favorite Institute </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event breadcrumb end -->


    <!-- course filter area start -->
    <div class="tp-grid-area pt-80 pb-40">
        <div class="container">
            <div class="tp-course-grid-sidebar p-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tp-course-grid-sidebar-left d-flex align-items-center">
                            <div class="tp-course-grid-sidebar-search p-relative mr-30 d-none d-lg-block">
                                <form action="#">
                                    <input type="text" placeholder="Search..."
                                        wire:model.live.debounce.250ms="search">
                                    <button class="tp-sidebar-search-btn" type="submit">
                                        <span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8496 11.85L14.9996 15" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13.6 7.29998C13.6 3.8206 10.7794 1 7.29998 1C3.8206 1 1 3.8206 1 7.29998C1 10.7794 3.8206 13.6 7.29998 13.6C10.7794 13.6 13.6 10.7794 13.6 7.29998Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </form>
                            </div>
                            <div wire:loading wire:target="search,selected_schools,selected_colleges,selected_universities,country_name,city_name" class="px-2">
                                <button class="btn btn-primary" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"> </span>
                                </button>
                            </div>
                            <div class="tp-course-grid-sidebar-tab tp-tab">
                                <ul class="nav nav-tabs" id="filterTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="false">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.66667 1H1V5.66667H5.66667V1Z" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.9997 1H8.33301V5.66667H12.9997V1Z" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.9997 8.33337H8.33301V13H12.9997V8.33337Z"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.66667 8.33337H1V13H5.66667V8.33337Z" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="true">
                                            <svg width="14" height="14" viewBox="0 0 16 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 7.11108H1" stroke="currentColor" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M15 1H1" stroke="currentColor" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M15 13.2222H1" stroke="currentColor" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tp-course-filter-top-result">
                                <p>Showing {{ $institutes->firstItem() }} to {{ $institutes->lastItem() }} of
                                    {{ $institutes->total() }} results
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tp-course-grid-sidebar-right d-flex justify-content-start justify-content-lg-end">

                            <div class="tp-course-grid-select tp-course-grid-sidebar-select">
                                <select class="wide country_name" wire:model="country_name">
                                    <option>Select Country</option>
                                    @foreach ($country as $list)
                                        <option value="{{ $list->country }}">{{ $list->country }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="tp-course-grid-select tp-course-grid-sidebar-select ml-10">
                                <select class="wide city_name" wire:model="city_name">
                                    <option>Select City</option>
                                    @if (isset($city))
                                        @foreach ($city as $list)
                                            <option value="{{ $list->city }}">{{ $list->city }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course filter area end -->


    <!-- grid-sidebar-area-start -->
    <section class="tp-grid-sidebar-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="tp-grid-sidebar-left">
                        <div class="tp-grid-widget-box">
                            <div class="tp-grid-widget-item">
                                <h4 class="tp-grid-widget-title">All Institues</h4>
                                <div class="tp-grid-widget-content">
                                    <div class="tp-grid-widget-checkbox">
                                        <ul>
                                            <li>
                                                <div class="from-checkbox">
                                                    <input id="remeber" type="checkbox"
                                                        wire:model.live="selected_schools">
                                                    <label for="remeber">School <span>
                                                            ({{ $SchoolCount }})</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="from-checkbox">
                                                    <input id="Business" type="checkbox"
                                                        wire:model.live="selected_colleges">
                                                    <label for="Business">Colleges <span>
                                                            ({{ $CollegeCount }})</span></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="from-checkbox" wire:model.live="selected_universitis">
                                                    <input id="Development" type="checkbox">
                                                    <label for="Development">Universitys
                                                        ({{ $UniversityCount }})</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content" id="myTabContent">
                        <!-- Grid View -->
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="tp-grid-sidebar-right">
                                <div class="row">
                                    @forelse ($institutes as $institute)
                                        <div class="col-xl-4 col-md-6">
                                            <div class="tp-course-item p-relative fix mb-30">
                                                <div class="tp-course-teacher mb-15">
                                                    <span>
                                                        <img src="{{ asset($institute->logo) }}"alt="">{{ $institute->name }}
                                                    </span>
                                                </div>
                                                <div class="tp-course-thumb sidebar">
                                                    <a href="{{ route('details-institute', $institute->slug) }}"><img
                                                            class="course-pink"
                                                            src="{{ asset($institute->thumb_img) }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="tp-course-content">
                                                    <div class="tp-course-tag mb-10">
                                                        <span>{{ $institute->institute_type }}</span>
                                                    </div>
                                                    <div class="tp-course-meta">
                                                        <span>
                                                            <span>
                                                                <i class="fa-solid fa-house"></i>
                                                            </span>
                                                            {{ $institute->country }}
                                                        </span>
                                                        <span>
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            {{ $institute->city }}
                                                        </span>
                                                    </div>
                                                    <h4 class="tp-course-title">
                                                        <a
                                                            href="{{ route('details-institute', $institute->id) }}">{{ $institute->name }}</a>
                                                    </h4>
                                                    <div
                                                        class="tp-course-rating d-flex align-items-end justify-content-between">
                                                        <div class="tp-course-rating-star">
                                                            <p>5.0<span> /5</span></p>
                                                            <div class="tp-course-rating-icon">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tp-course-btn">
                                                    <a href="{{ route('details-institute', $institute->slug) }}" wire:navigate>
                                                        Preview
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!--/ end Grid View -->

                        <!-- Single View -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="tp-list-sidebar-right">
                                <div class="row">
                                    @forelse ($institutes as $institute)
                                        <div class="tp-course-filter-item mb-25 d-flex">
                                            <div class="tp-course-list-thumb">
                                                <a href="{{ route('details-institute', $institute->slug) }}"
                                                    wire:navigate><img class="course-pink"
                                                        src="{{ $institute->thumb_img }}" alt=""></a>
                                            </div>
                                            <div class="tp-course-filter-content">
                                                <div class="tp-course-filter-tag mb-10">
                                                    <span class="tag-span">{{ $institute->institute_type }}</span>
                                                </div>
                                                <h4 class="tp-course-list-title">
                                                    <a
                                                        href="{{ route('details-institute', $institute->slug) }}"wire:navigate>{{ $institute->name }}</a>
                                                </h4>
                                                <div class="tp-course-filter-meta">
                                                    <span><img src="{{ $institute->logo }}" alt=""></span>
                                                    <span>
                                                        <i class="fa-solid fa-house"></i>
                                                        {{ $institute->country }}
                                                    </span>
                                                    <span>
                                                        <i class="fa-solid fa-location-dot"></i>
                                                        {{ $institute->city }}
                                                    </span>
                                                </div>
                                                <div class="tp-course-list-p">
                                                    <p>{{ substr($institute->description, 0, 150).'...' }} </p>
                                                </div>
                                                <div
                                                    class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                                                    <div class="tp-course-rating-star">
                                                        <p>5.0<span> /5</span></p>
                                                        <div class="tp-course-rating-icon">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <a class="tp-btn w-100 text-center"
                                                            href="{{ route('details-institute', $institute->slug) }}" wire:navigate>Preview</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!--/end Single View -->
                    </div>

                    <div class="tp-event-inner-pagination">
                        {{ $institutes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grid-sidebar-area-end -->

</div>
@script
    <script>
        document.addEventListener('picker', function(e) {
            const status = e.detail[0].status;
            if (status === 'yes') {
                requestAnimationFrame(() => {
                // setTimeout(() => {
                    $(".country_name").niceSelect();
                    $(".city_name").niceSelect();
                // },1000)
                });
            }
        });

        $('.country_name').on('change', function() {
            const countryName = this.value;
            if (countryName === 'Select Country') {
                setTimeout(() => {
                    @this.set('city_name', null);
                    @this.set('country_name', null);
                }, 500);
                setTimeout(() => {
                    $('.city_name').empty().append('<option value="">Select City</option>');
                    $('.city_name').val('');
                    $('.city_name').niceSelect('update');
                }, 1000);
            } else {
                @this.set('city_name', '');
                @this.set('country_name', countryName);
                $('.city_name').val('Select City');
                $('.city_name').niceSelect('update');
            }
        });

        $('body').on('change', '.city_name', function() {
            const cityName = this.value;

            if (cityName === 'Select City') {
                @this.set('city_name', '');
                $('.city_name').val('Select City');
                $('.city_name').niceSelect('update');
            } else {
                @this.set('city_name', cityName);
            }
        });
    </script>
@endscript
