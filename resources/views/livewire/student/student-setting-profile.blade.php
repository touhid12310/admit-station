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
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="tp-dashboard-section">
                                 <h2 class="tp-dashboard-title">Change Profile Info</h2>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-12">
                           <form wire:submit.prevent="update">
                              <!-- session msg-->
                              @include('livewire.partials.flash-msg')
                              <!-- end session msg-->
                              <div class="tpd-setting-box profile">

                                 <div class="tp-dashboard-banner-bg profile mb-100" data-background=" @if (auth()->user()->photo) {{ asset($cover_photo) }}  @else {{ asset('assets/images/cover.jpg') }} @endif" wire:ignore>
                                    <div class="tp-instructor-wrap d-flex justify-content-between">
                                       <div class="tp-instructor-info d-flex">
                                          <div class="tp-instructor-avatar p-relative profile">
                                             @if (auth()->user()->photo)
                                                <img src="{{ asset( Auth::user()->photo) }}" alt="">
                                             @else
                                                <img src="{{ asset('assets/images/profile.png') }}" alt="">
                                             @endif
                                             <span><svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="19" cy="19" r="18" fill="white" stroke="#E6E8F0" />
                                                <path d="M23.352 13.5172L23.272 13.3463C23.056 12.9034 22.808 12.3907 22.656 12.0954C22.288 11.3962 21.656 11.0078 20.88 11H17.112C16.336 11.0078 15.712 11.3962 15.344 12.0954C15.184 12.4062 14.912 12.9656 14.688 13.424L14.64 13.5172C14.616 13.5794 14.552 13.6104 14.488 13.6104C12.56 13.6104 11 15.1332 11 16.9978V21.6127C11 23.4772 12.56 25 14.488 25H23.512C25.432 25 27 23.4772 27 21.6127V16.9978C27 15.1332 25.432 13.6104 23.512 13.6104C23.44 13.6104 23.384 13.5716 23.352 13.5172Z" fill="#303651" />
                                                <path d="M19.0035 15.9806C19.8435 15.9806 20.6355 16.2992 21.2275 16.8741C21.8195 17.4568 22.1475 18.2259 22.1475 19.0339C22.1395 19.8808 21.7875 20.6421 21.2195 21.1937C20.6515 21.7454 19.8675 22.0872 19.0035 22.0872C18.1635 22.0872 17.3795 21.7687 16.7795 21.1937C16.1875 20.6111 15.8595 19.8497 15.8595 19.0339C15.8515 18.2259 16.1795 17.4646 16.7715 16.8819C17.3715 16.2992 18.1635 15.9806 19.0035 15.9806ZM19.0035 17.146C18.4835 17.146 17.9955 17.3402 17.6195 17.7054C17.2515 18.0628 17.0515 18.5367 17.0595 19.0262V19.0339C17.0595 19.5389 17.2595 20.0128 17.6275 20.3702C17.9955 20.7276 18.4835 20.9218 19.0035 20.9218C20.0755 20.9218 20.9395 20.075 20.9475 19.0339C20.9475 18.5289 20.7475 18.055 20.3795 17.6976C20.0115 17.3402 19.5235 17.146 19.0035 17.146ZM23.4915 15.7942C23.8915 15.7942 24.2195 16.1127 24.2195 16.5012C24.2195 16.8896 23.8915 17.2004 23.4915 17.2004C23.0915 17.2004 22.7715 16.8896 22.7715 16.5012C22.7715 16.1127 23.0915 15.7942 23.4915 15.7942Z" fill="white" />
                                             </svg></span>
                                          </div>
                                       </div> 
                                       <div class="tp-instructor-course-btn profile tpd-setting-cartificate-content">
                                          <span class="upload-btn">
                                             <input id="tpd-setting-cartificate-input" type="file" wire:model="cover_photo" accept="image/png, image/jpeg">
                                             <label for="tpd-setting-cartificate-input"><span><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.624 2.8768L13.539 2.68146C13.3095 2.17536 13.046 1.58935 12.8845 1.25194C12.4935 0.45283 11.822 0.00887902 10.9975 0H6.994C6.1695 0.00887902 5.5065 0.45283 5.1155 1.25194C4.9455 1.6071 4.6565 2.24639 4.4185 2.77026L4.3675 2.8768C4.342 2.94784 4.274 2.98335 4.206 2.98335C2.1575 2.98335 0.5 4.72364 0.5 6.85461V12.1287C0.5 14.2597 2.1575 16 4.206 16H13.794C15.834 16 17.5 14.2597 17.5 12.1287V6.85461C17.5 4.72364 15.834 2.98335 13.794 2.98335C13.7175 2.98335 13.658 2.93896 13.624 2.8768Z" fill="white" />
                                                <path d="M9.00471 5.69173C9.89721 5.69173 10.7387 6.05577 11.3677 6.71282C11.9967 7.37875 12.3452 8.25777 12.3452 9.18119C12.3367 10.149 11.9627 11.0191 11.3592 11.6496C10.7557 12.28 9.92271 12.6706 9.00471 12.6706C8.11221 12.6706 7.27921 12.3066 6.64171 11.6496C6.01271 10.9836 5.66421 10.1135 5.66421 9.18119C5.65571 8.25777 6.00421 7.38763 6.63321 6.7217C7.27071 6.05577 8.11221 5.69173 9.00471 5.69173ZM9.00471 7.02359C8.45221 7.02359 7.93371 7.24556 7.53421 7.66288C7.14321 8.07131 6.93071 8.61293 6.93921 9.17231V9.18119C6.93921 9.75833 7.15171 10.2999 7.54271 10.7084C7.93371 11.1168 8.45221 11.3388 9.00471 11.3388C10.1437 11.3388 11.0617 10.371 11.0702 9.18119C11.0702 8.60405 10.8577 8.06243 10.4667 7.654C10.0757 7.24556 9.55721 7.02359 9.00471 7.02359ZM13.7732 5.47864C14.1982 5.47864 14.5467 5.84268 14.5467 6.28663C14.5467 6.73058 14.1982 7.08574 13.7732 7.08574C13.3482 7.08574 13.0082 6.73058 13.0082 6.28663C13.0082 5.84268 13.3482 5.47864 13.7732 5.47864Z" fill="#333333" />
                                             </svg></span> Edit Cover Photo</label>
                                             
                                          </span>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="tpd-setting-from">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="tpd-input">
                                             <label for="">Full Name</label>
                                             <input type="text" wire:model="name" placeholder="Hasan">
                                          </div>
                                       </div>
                                       
                                       
                                       <div class="col-lg-6">
                                          <div class="tpd-input">
                                             <label for="">Phone Number</label>
                                             <input type="text" wire:model="phone_no" placeholder="(+44) 433 962 004">
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="tpd-input">
                                             <label for="">Email</label>
                                             <input type="text" wire:model="email" placeholder="shihab@example.com" disabled>
                                          </div>
                                       </div>

                                       <div class="col-lg-6">
                                          <div class="tpd-input">
                                             <label for="">Skill/Occupation</label>
                                             <input type="text" wire:model="occupation" placeholder="Full Stack Developer">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="tpd-input">
                                             <label for="">Profile Photo</label>
                                             <input type="file" wire:model="photo" class="p-2">
                                          </div>
                                       </div>
                                       
                                       <div class="col-lg-12">
                                          <div class="tpd-input">
                                             <label for="">About me</label>
                                             <textarea wire:model="bio" placeholder="I'm the Front-End Developer for London, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences."></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 
                                 {{-- <div class="tpd-setting-cartificate">
                                    <h5 class="tpd-setting-cartificate-title">Cartificate Photo</h5>
                                    <div class="tpd-setting-cartificate-upload d-flex align-items-center">
                                       <div class="tpd-setting-cartificate-thumb">
                                          <img src="{{ asset($photo) }}" alt="" width="50%">
                                       </div>
                                       <div class="tpd-setting-cartificate-content pr-100">
                                          <input id="tpd-setting-cartificate-input" type="file" wire:model="cartificates" multiple>
                                       </div>
                                    </div>
                                 </div> --}}


                                 <div class="tpd-setting-cartificate">
                                    <div class="tpd-setting-cartificate-btn">
                                       <button> <span wire:loading.remove>Save Changes</span>
                                       <span wire:loading>
                                          <div class="spinner-border text-light" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                          </div>
                                       </span></button>
                                    </div>
                                 </div>

                              </div>
                           </form>
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
