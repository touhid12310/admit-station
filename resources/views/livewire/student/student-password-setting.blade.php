<div>
    <main class="tp-dashboard-body-bg">
   
        <!-- dashboard-banner-area-start -->
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

                    <div class="tpd-course-area">
                        <!-- dashboard-profile-setting-menu-area-start -->
                           @livewire('partials.dashboad-setting-menu')
                        <!--/end dashboard-profile-setting-menu-area-start -->

                        <div class="tpd-setting-box">
                            <div class="tpd-setting-password-content">
                               <div class="col-lg-8">
                                  <div class="tpd-input">
                                     <label for="">Current Password</label>
                                     <input type="text" placeholder="Current Password">
                                  </div>
                               </div>
                               <div class="col-lg-8">
                                  <div class="tpd-input">
                                     <label for="">New Password</label>
                                     <input type="text" placeholder="New Password">
                                  </div>
                               </div>
                               <div class="col-lg-8">
                                  <div class="tpd-input">
                                     <label for="">Re-type New Password</label>
                                     <input type="text" placeholder="Re-type New Password">
                                  </div>
                               </div>
                               <div class="col-lg-8">
                                  <div class="tpd-setting-btn">
                                     <button>Set New Password</button>
                                  </div>
                               </div>
                            </div>
                         </div>

                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- dashboad-content-box-area-end -->

     </main>
</div>

