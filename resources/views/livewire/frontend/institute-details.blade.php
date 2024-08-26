<div>
    <!-- Course details breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-10 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg" data-background="{{asset('assets/img/breadcrumb/breadcrumb-bg.jpg')}}" wire:ignore></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list inner-after">
                            <span><a href="{{ route('institute-list') }}"><svg width="17" height="14"
                                        viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z"
                                            fill="currentColor" />
                                    </svg></a></span>
                            <span>{{ $vendor->vendors_types }}</span>
                        </div>
                        <h3 class="tp-breadcrumb__title" style="color: #AB0C2F">{{ $vendor->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course details breadcrumb end -->

    <!-- Course details area start -->
    <section class="tp-course-details-area grey-bg pt-100 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="tp-course-details-wrapper">
                        <div>
                            <img src="{{ asset($vendor->thumb_img) }}" alt="" style="width:100%;" wire:ignore>
                        </div>
                        <div class="tp-course-details-heading pt-20">
                            <h3 class="tp-course-details-title">{{ $vendor->name }}</h3>
                            <p>Earn a bachelor's in computer science degree from Acadia University and develop the
                                software engineering, project management and programming skills to impact how technology
                                will change and transform our world.</p>
                            <div class="tp-course-details-thumb">
                                <img src="assets/img/course/details/course-details-thumb-1.jpg" alt="">
                            </div>
                            <h3 class="tp-course-details-title">Overview</h3>
                            <p>How we do business, how we communicate and what we do for entertainment are all being
                                transformed by computer scientists and software developers. Quickly changing landscapes
                                in these fields and beyond provide opportunities for people with advanced computer
                                science skills to profoundly impact the world. Biola's computer science major allows
                                future computer scientists to grow their knowledge in the field of computer science,
                                while honing their abilities to innovate, program, solve problems and succeed across a
                                range of careers.
                            </p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="tp-course-requrement-widget-box">
                        <div class="tp-course-requrement-widget mb-30">
                            <div class="tp-course-requrement-widget-content">
                                <a href="#">EIIN : {{$vendor->EIIN}}</a>
                                <a href="#">ESTD : {{$vendor->E_year}}</a>
                                <a href="#">Country : {{$vendor->country}}</a>
                                <a href="#">City :{{$vendor->city}}</a>
                            </div>
                        </div>
                        <div class="tp-course-requrement-widget-btn mb-30">
                            @auth
                                <form wire:submit.prevent="apply" class="mb-3">
                                    <!-- session msg-->
                                    @include('livewire.partials.flash-msg')
                                    <!-- end session msg-->
                                    <input type="hidden" wire:model="vendor_id" value="{{ $vendor->id }}">
                                    <input type="hidden" wire:model="user_id" value="{{ $user_id }}"> 
                                    @error('vendor_id')
                                        <div class="m-2 text-danger">{{ $message }}</div>
                                    @enderror
                                    <button class="tp-btn btn-2 w-100 text-center">
                                        <span wire:loading.remove>Apply Now</span>
                                        <span wire:loading>
                                            <div class="spinner-border text-light" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </span>
                                    </button>
                                </form>
                            @else  
                                <div class="tp-btn btn-2 w-100 text-center">
                                    <a href="{{ route('login')}}">Apply Now</a>
                                </div>
                            @endauth
                            
                        </div>
                        <div class="tp-course-requrement-widget-contact mb-30">
                            <h4 class="tp-course-requrement-widget-contact-title">Contact Us</h4>
                            <p>{{$vendor->address}}<br>{{$vendor->country_code}}{{$vendor->mobile_no}}</p>
                            <a href="mailto:admitstation24@gmail.com"><span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="18" height="16" viewBox="0 0 18 16" fill="none">
                                        <path opacity="0.4"
                                            d="M13.5 15.3H4.5C1.8 15.3 0 13.95 0 10.8V4.5C0 1.35 1.8 0 4.5 0H13.5C16.2 0 18 1.35 18 4.5V10.8C18 13.95 16.2 15.3 13.5 15.3Z"
                                            fill="#FFF7F1" />
                                        <path
                                            d="M9.00361 8.43302C8.24761 8.43302 7.48261 8.19902 6.89761 7.72202L4.08061 5.47202C3.79261 5.23802 3.73861 4.81502 3.97261 4.52702C4.20661 4.23902 4.62961 4.18503 4.91761 4.41903L7.73461 6.66902C8.41861 7.21802 9.5796 7.21802 10.2636 6.66902L13.0806 4.41903C13.3686 4.18503 13.8006 4.23002 14.0256 4.52702C14.2596 4.81502 14.2146 5.24702 13.9176 5.47202L11.1006 7.72202C10.5246 8.19902 9.75961 8.43302 9.00361 8.43302Z"
                                            fill="#FFF7F1" />
                                    </svg></span> admitstation24@gmail.com</a>
                            <a href="tel:90762"><span><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                        height="18" viewBox="0 0 18 18" fill="none">
                                        <path
                                            d="M14.058 7.87487C13.671 7.87487 13.365 7.55987 13.365 7.18187C13.365 6.84887 13.032 6.15587 12.474 5.55287C11.925 4.96787 11.322 4.62587 10.818 4.62587C10.431 4.62587 10.125 4.31087 10.125 3.93287C10.125 3.55487 10.44 3.23987 10.818 3.23987C11.718 3.23987 12.663 3.72587 13.491 4.59887C14.265 5.41787 14.76 6.43487 14.76 7.17287C14.76 7.55987 14.445 7.87487 14.058 7.87487Z"
                                            fill="#FFF7F1" />
                                        <path
                                            d="M17.3058 7.875C16.9188 7.875 16.6128 7.56 16.6128 7.182C16.6128 3.987 14.0118 1.395 10.8258 1.395C10.4388 1.395 10.1328 1.08 10.1328 0.702C10.1328 0.324 10.4388 0 10.8168 0C14.7768 0 17.9988 3.222 17.9988 7.182C17.9988 7.56 17.6838 7.875 17.3058 7.875Z"
                                            fill="#FFF7F1" />
                                        <path opacity="0.4"
                                            d="M8.811 10.989L5.868 13.932C5.544 13.644 5.229 13.347 4.923 13.041C3.996 12.105 3.159 11.124 2.412 10.098C1.674 9.072 1.08 8.046 0.648 7.029C0.216 6.003 0 5.022 0 4.086C0 3.474 0.108 2.889 0.324 2.349C0.54 1.8 0.882 1.296 1.359 0.846C1.935 0.279 2.565 0 3.231 0C3.483 0 3.735 0.0540001 3.96 0.162C4.194 0.27 4.401 0.432 4.563 0.666L6.651 3.609C6.813 3.834 6.93 4.041 7.011 4.239C7.092 4.428 7.137 4.617 7.137 4.788C7.137 5.004 7.074 5.22 6.948 5.427C6.831 5.634 6.66 5.85 6.444 6.066L5.76 6.777C5.661 6.876 5.616 6.993 5.616 7.137C5.616 7.209 5.625 7.272 5.643 7.344C5.67 7.416 5.697 7.47 5.715 7.524C5.877 7.821 6.156 8.208 6.552 8.676C6.957 9.144 7.389 9.621 7.857 10.098C8.181 10.413 8.496 10.719 8.811 10.989Z"
                                            fill="#FFF7F1" />
                                        <path
                                            d="M17.9728 14.6969C17.9728 14.9489 17.9278 15.2099 17.8378 15.4619C17.8108 15.5339 17.7838 15.6059 17.7478 15.6779C17.5948 16.0019 17.3968 16.3079 17.1358 16.5959C16.6948 17.0819 16.2088 17.4329 15.6598 17.6579C15.6508 17.6579 15.6418 17.6669 15.6328 17.6669C15.1018 17.8829 14.5258 17.9999 13.9048 17.9999C12.9868 17.9999 12.0058 17.7839 10.9708 17.3429C9.93584 16.9019 8.90084 16.3079 7.87484 15.5609C7.52384 15.2999 7.17284 15.0389 6.83984 14.7599L9.78284 11.8169C10.0348 12.0059 10.2598 12.1499 10.4488 12.2489C10.4938 12.2669 10.5478 12.2939 10.6108 12.3209C10.6828 12.3479 10.7548 12.3569 10.8358 12.3569C10.9888 12.3569 11.1058 12.3029 11.2048 12.2039L11.8888 11.5289C12.1138 11.3039 12.3298 11.1329 12.5368 11.0249C12.7438 10.8989 12.9508 10.8359 13.1758 10.8359C13.3468 10.8359 13.5268 10.8719 13.7248 10.9529C13.9228 11.0339 14.1298 11.1509 14.3548 11.3039L17.3338 13.4189C17.5678 13.5809 17.7298 13.7699 17.8288 13.9949C17.9188 14.2199 17.9728 14.4449 17.9728 14.6969Z"
                                            fill="#FFF7F1" />
                                    </svg></span> +880 1839-440444</a>
                        </div>
                       {{--  <div class="tp-course-requrement-widget-faq">
                            <h4 class="tp-course-requrement-widget-faq-title">Do you have <br>
                                more questions?</h4>
                            <p>Read our <a href="{{ route('FAQs') }}">FAQ</a></p>
                            <div class="tp-course-requrement-widget-faq-thumb">
                                <img src="{{ asset($vendor->thumb_img) }}" alt="{{$vendor->thumb_img}}" wire:ignore style="width: 100%">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course details area end -->
</div>
