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

                        <div class="row">
                            <div class="col-12">
                               <div class="tpd-setting-box">
                                  <h3 class="tpd-setting-social-title">Social Profile Link</h3>
                                  <div class="tpd-setting-social-content">
                                    <form wire:submit.prevent="save">
                                       <!-- session msg-->
                                       @include('livewire.partials.flash-msg')
                                       <!-- end session msg-->
                                       <div class="tpd-setting-social-wrap d-flex align-items-center">
                                          <div class="tpd-setting-social-icon d-flex align-items-center">
                                             <a href="{{$facebook}}" target="_blank">
                                             <img src="{{asset('assets/img/dashboard/icon/facebook.png')}}" alt=""></a>
                                             <h4>Facebook <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg></span></h4>
                                          </div>
                                          <div class="tpd-setting-social-input">
                                             <div class="tpd-input">
                                                <input type="text" wire:model="facebook" placeholder="https://facebook.com/username">
                                             </div>
                                             @error('facebook')
                                                   <div class="m-2 text-danger">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="tpd-setting-social-wrap d-flex align-items-center">
                                          <div class="tpd-setting-social-icon d-flex align-items-center">
                                             <a href="{{$twitter}}" target="_blank"><img src="{{asset('assets/img/dashboard/icon/twetter.png')}}" alt=""></a>
                                             <h4>Twitter <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg></span></h4>
                                          </div>
                                          <div class="tpd-setting-social-input">
                                             <div class="tpd-input">
                                                <input type="text" wire:model="twitter" placeholder="https://twitter.com/username">
                                             </div>
                                             @error('twitter')
                                                   <div class="m-2 text-danger">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="tpd-setting-social-wrap d-flex align-items-center">
                                          <div class="tpd-setting-social-icon d-flex align-items-center">
                                             <a href="{{$linkedin}}" target="_blank"><img src="{{asset('assets/img/dashboard/icon/linkdin.png')}}" alt=""></a>
                                             <h4>Linkedin <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg></span></h4>
                                          </div>
                                          <div class="tpd-setting-social-input">
                                             <div class="tpd-input">
                                                <input type="text" wire:model="linkedin" placeholder="https://linkedin.com/username">
                                             </div>
                                             @error('linkedin')
                                                   <div class="m-2 text-danger">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="tpd-setting-social-wrap d-flex align-items-center">
                                          <div class="tpd-setting-social-icon d-flex align-items-center">
                                             <a href="{{$website}}" target="_blank"><img src="{{asset('assets/img/dashboard/icon/website.png')}}" alt=""></a>
                                             <h4>Website <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg></span></h4>
                                          </div>
                                          <div class="tpd-setting-social-input">
                                             <div class="tpd-input">
                                                <input type="text" wire:model="website" placeholder="https://example.com/">
                                             </div>
                                             @error('website')
                                                   <div class="m-2 text-danger">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="tpd-setting-social-wrap d-flex align-items-center">
                                          <div class="tpd-setting-social-icon d-flex align-items-center">
                                             <a href="{{$github}}" target="_blank"><img src="{{asset('assets/img/dashboard/icon/git.png')}}" alt=""></a>
                                             <h4>Github <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg></span></h4>
                                          </div>
                                          <div class="tpd-setting-social-input">
                                             <div class="tpd-input">
                                                <input type="text" wire:model="github" placeholder="https://github.com/username">
                                             </div>
                                             @error('github')
                                                   <div class="m-2 text-danger">{{ $message }}</div>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="tpd-setting-btn">
                                          <button>
                                             <span wire:loading.remove>Update Profile</span>
                                             <span wire:loading>
                                                <div class="spinner-border text-light" role="status">
                                                      <span class="visually-hidden">Loading...</span>
                                                </div>
                                             </span>
                                          </button>
                                       </div>
                                    </form>   
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


