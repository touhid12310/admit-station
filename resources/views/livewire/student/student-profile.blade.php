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

                    <!-- dashboard-content-area-start -->
                    <div class="tpd-content-layout">
                       <div class="tp-profile-wrapper">
                          <div class="row">
                             <div class="col-lg-6">
                                <div class="tp-dashboard-section">
                                   <h2 class="tp-dashboard-title">My Profile</h2>
                                </div>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-12">
                                <div class="tp-profile-box">
                                   <div class="tp-profile-wrap">
                                      <ul>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Registration Date</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span>{{ $created_at->format('F j, Y g:i A') }}</span>
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Full Name</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span>{{ $name }}</span>
                                               </div>
                                            </div>
                                         </li>
                              
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>User type</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span class="uppercase">{{ $user_type }}</span>
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Email</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span>{{ $email }}</span>
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Phone Number</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span>{{ $phone_no }}</span>
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Skill/Occupation</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span>{{$occupation}}</span>
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Certificates</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  @if(is_array($certificates_img))
                                                      @foreach($certificates_img as $img)
                                                         <a href="{{ asset($img) }}" target="_blank" class="d-flex justify-content-between">
                                                             <img src="{{ asset($img) }}" alt="" width="200px" height="100px" class="m-2">
                                                         </a>
                                                      @endforeach
                                                  @else
                                                   <div class="tp-profile-info-details">
                                                      <span>Not upload</span>
                                                   </div>
                                                  @endif
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="tp-profile-info d-flex">
                                               <div class="tp-profile-info-tag">
                                                  <span>Biography</span>
                                               </div>
                                               <div class="tp-profile-info-details">
                                                  <span class="details-zone">{{$bio}}</span>
                                               </div>
                                            </div>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- dashboard-content-area-end -->

                 </div>
              </div>
           </div>
        </section>
        <!-- dashboad-content-box-area-end -->

     </main>
</div>
