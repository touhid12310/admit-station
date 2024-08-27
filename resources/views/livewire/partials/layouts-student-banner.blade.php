<div>
    <section class="tp-dashboard-banner-wrap">
            <div class="tp-dashboard-banner-shape">
                <img src="{{ asset('assets/images/dashboard-bg-shape-1.jpg') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-dashboard-banner-bg mt-30" data-background=" @if (auth()->user()->photo) {{ asset($cover_photo) }}  @else {{ asset('assets/images/cover.jpg') }} @endif">
                        <div class="tp-instructor-wrap d-flex justify-content-between">
                            <div class="tp-instructor-info d-flex">
                                <div class="tp-instructor-avatar">
                                    @if (auth()->user()->photo)
                                        <img src="{{ asset( Auth::user()->photo) }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/profile.png') }}" alt="">
                                    @endif

                                </div>
                                <div class="tp-instructor-content">
                                    <h4 class="tp-instructor-title">{{ $name }}</h4>
                                    <div class="tp-instructor-rate  d-flex align-items-center">
                                        <div class="tp-instructor-rating">
                                            <a href="{{$facebook}}" target="_blank">
                                                <img src="{{asset('assets/img/dashboard/icon/facebook.png')}}" alt="">
                                            </a>
                                            <a href="{{$twitter}}" target="_blank">
                                                <img src="{{asset('assets/img/dashboard/icon/twetter.png')}}" alt="">
                                            </a>
                                            <a href="{{$linkedin}}" target="_blank">
                                                <img src="{{asset('assets/img/dashboard/icon/linkdin.png')}}" alt="">
                                            </a>
                                            <a href="{{$website}}" target="_blank">
                                                <img src="{{asset('assets/img/dashboard/icon/website.png')}}" alt="">
                                            </a>
                                            <a href="{{$github}}" target="_blank">
                                                <img src="{{asset('assets/img/dashboard/icon/git.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
