<div>
    <main class="tp-dashboard-body-bg">

        <!-- dashboard-banner-area-start -->
        <section class="tp-dashboard-banner-wrap">
            <div class="tp-dashboard-banner-shape"><img src="{{ asset('assets/img/dashboard/bg/dashboard-bg-shape-1.jpg') }}" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-dashboard-banner-bg mt-30" data-background="{{ asset('assets/img/dashboard/bg/dashboard-bg-1.jpg') }}">
                        <div class="tp-instructor-wrap d-flex justify-content-between">
                            <div class="tp-instructor-info d-flex">
                                <div class="tp-instructor-avatar">
                                    <img src="{{ asset('assets/img/dashboard/profile/dashboard-profile-2.jpg') }}" alt="">
                                </div>
                                <div class="tp-instructor-content">
                                    <h4 class="tp-instructor-title">Indigo Violet</h4>
                                    <div class="tp-instructor-rate  d-flex align-items-center">
                                    <div class="tp-instructor-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span>4.61</span>
                                    <span>(18 Ratings)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-instructor-course-btn">
                                <a class="tp-btn-add-course" href="instructor-create-new-course.html"><i class="fa-regular fa-plus"></i> Create a New Course</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- dashboard-banner-area-end -->

        <!-- dashboad-content-box-area-start -->
        <section class="tpd-main pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- dashboard-menu-area-start -->
                    @livewire('partials.layouts-dashboard-menu-aside')
                    <!-- dashboard-menu-area-end -->

                </div>
                <div class="col-lg-9">

                    <!-- dashboard-content-area-start -->
                    <div class="tpd-content-layout">
                    
                    <!-- fact-area-start -->
                    <section class="tp-fact-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tp-dashboard-section">
                                <h2 class="tp-dashboard-title">Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                <div class="tp-fact-content">
                                    <h4 class="tp-fact-count">20</h4>
                                    <span>Active Courses</span>
                                </div>
                                <div class="tp-fact-icon">
                                    <span><img src="{{ asset('assets/img/dashboard/icon/fact/teacher.svg') }}" alt="fact-icon"></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                <div class="tp-fact-content">
                                    <h4 class="tp-fact-count">84</h4>
                                    <span>Enrolled Courses</span>
                                </div>
                                <div class="tp-fact-icon">
                                    <span class="common-pale-yellow"><img src="{{ asset('assets/img/dashboard/icon/fact/enroll-icon.svg') }}" alt="fact-icon"></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                <div class="tp-fact-content">
                                    <h4 class="tp-fact-count">42</h4>
                                    <span>Completed Courses</span>
                                </div>
                                <div class="tp-fact-icon">
                                    <span class="common-pale-pacific"><img src="{{ asset('assets/img/dashboard/icon/fact/cup.svg') }}" alt="fact-icon"></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                <div class="tp-fact-content">
                                    <h4 class="tp-fact-count">145</h4>
                                    <span>Total Students</span>
                                </div>
                                <div class="tp-fact-icon">
                                    <span class="common-pale-green"><img src="{{ asset('assets/img/dashboard/icon/fact/students.svg') }}" alt="fact-icon"></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                <div class="tp-fact-content">
                                    <h4 class="tp-fact-count">65</h4>
                                    <span>Total Courses</span>
                                </div>
                                <div class="tp-fact-icon">
                                    <span class="common-pale-blue"><img src="{{ asset('assets/img/dashboard/icon/fact/course-total.svg') }}" alt="fact-icon"></span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                <div class="tp-fact-content">
                                    <h4 class="tp-fact-count">26</h4>
                                    <span>Total Earnings</span>
                                </div>
                                <div class="tp-fact-icon">
                                    <span class="common-pale-purple"><img src="{{ asset('assets/img/dashboard/icon/fact/card-pos.svg') }}" alt="fact-icon"></span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                    <!-- fact-area-end -->

                    </div>
                    <!-- dashboard-content-area-end -->

                </div>
            </div>
        </div>
        </section>
        <!-- dashboad-content-box-area-end -->

    </main>
</div>
