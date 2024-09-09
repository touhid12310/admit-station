<div>
   <main class="tp-dashboard-body-bg">
       
       <!-- layouts-dashboard-banner-area-start -->
       @livewire('partials.layouts-student-banner')
       <!-- dashboard-banner-area-end -->

       <!-- dashboad-content-box-area-start -->
       <section class="tpd-main pb-75">
       <div class="container">
           <div class="row">
               <div class="col-lg-3">

                   <!-- dashboard-menu-area-start -->
                   @livewire('partials.layouts-student-aside-menu')
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

                           <div class="col-lg-5">
                               <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                    <div class="tp-fact-content">
                                        <h4 class="tp-fact-count">{{$instituteAdded}}</h4>
                                        <span>Institute added</span>
                                    </div>
                                    <div class="tp-fact-icon">
                                        <span><img src="{{ asset('assets/img/dashboard/icon/fact/teacher.svg') }}" alt="fact-icon"></span>
                                    </div>
                                </div>
                           </div>

                           <div class="col-lg-5">
                                <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                    <div class="tp-fact-content">
                                        <h4 class="tp-fact-count">{{$totalStudentApplied}}</h4>
                                        <span>Total Student Applied</span>
                                    </div>
                                    <div class="tp-fact-icon">
                                        <span class="common-pale-yellow"><img src="{{ asset('assets/img/dashboard/icon/fact/enroll-icon.svg') }}" alt="fact-icon"></span>
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

