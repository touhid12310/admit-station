<div>
   <!-- become instructor breadcrumb start -->
   <section class="tp-breadcrumb__area pt-50 pb-20 p-relative z-index-1 fix">
      <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg"></div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-sm-12">
               <div class="tp-breadcrumb__content">
                  <div class="tp-breadcrumb__list pt-120">
                     <span><a href="{{ url('/') }}" wire:navigate><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                     </svg></a></span>
                     <span class="color">Become an Agent</span>
                  </div>
               <h3 class="tp-breadcrumb__title" style="color: #AB0C2F">Become an Agent</h3>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- become instructor breadcrumb end -->

   <!-- become instructor area start -->
   <section class="tp-instructor-area tp-instructor-p pt-50">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-instructor-become-tab pb-80 wow fadeInUp" data-wow-delay=".5s">
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                           <div class="col-lg-7">
                              <div class="tp-instructor-become-wrap">
                                 <h4 class="tp-instructor-become-title">Become an Agent</h4>

                                 <span class="tp-instructor-become-subtitle">Understand the Role</span>
                                 <p> Learn about AdmitStation’s services and the visa types they handle.</p>
                                 
                                 <span class="tp-instructor-become-subtitle">How we help you</span>
                                 <p>
                                    AdmitStation provides comprehensive support for those looking to become agents. They offer access to resources about their services and visa types, recommend relevant courses and training programs, assist with obtaining necessary licenses and certifications, suggest ways to gain practical experience, provide networking tips, help prepare applications, resumes, and cover letters, and keep you updated on changes in immigration laws and visa regulations. You can also become an instructor in a supportive online community.
                                 </p>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="tp-instructor-become-thumb text-start text-xl-end">
                                 <img src="{{asset('assets/images/mission/thumb-1.png')}}" alt="" width="100%">
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
   <!-- become instructor area end -->

   <!-- become instructor contact area start -->
   <section class="tp-instructor-apply-area pt-80 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-instructor-apply-box wow fadeInUp" data-wow-delay=".3s">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="tp-instructor-apply-thumb">
                           <img src="{{asset('assets/images/Agent-thumb-contact.png')}}" alt="" class="pt-10 rounded-md" style="width: 100%">
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="tp-instructor-apply-from">
                           
                              <div class="tp-instructor-apply-heading">
                                 <h3 class="tp-instructor-apply-title">Become an Agent !</h3>
                              </div>

                              <div class="tp-instructor-apply-form-wrapper">
                                 <form wire:submit.prevent="applyForAgent">
                                    <!-- session msg-->
                                    @include('livewire.partials.flash-msg')
                                    <!-- end session msg-->
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="tp-instructor-apply-input">
                                             <label>Full Name</label>
                                             <input type="text" wire:model="full_name" placeholder="Please enter Your Full name">
                                          </div>
                                          @error('full_name')
                                             <div class="m-2 text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="tp-instructor-apply-input">
                                             <label>Phone number</label>
                                             <input type="text" wire:model="phone_number" placeholder="Please enter Phone Number">
                                          </div>
                                          @error('phone_number')
                                             <div class="m-2 text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-instructor-apply-input">
                                             <label>Email address</label>
                                             <input type="email" wire:model="email" placeholder="Please enter email">
                                          </div>
                                          @error('email')
                                             <div class="m-2 text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                       
                                       <div class="col-lg-12">
                                          <div class="tp-instructor-apply-input">
                                             <label>Bio</label>
                                             <textarea type="text" wire:model="bio" placeholder="Please write short description about you."></textarea>
                                          </div>
                                          @error('bio')
                                             <div class="m-2 text-danger">{{ $message }}</div>
                                          @enderror
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-instructor-apply-input-btn">
                                             <button class="tp-btn btn-2 w-30 text-center">
                                                <span wire:loading.remove>Become a Agent</span>
                                                <span wire:loading>
                                                    <div class="spinner-border text-light" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </span>
                                            </button>
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
         </div>
      </div>
   </section>
   <!-- become instructor contact area end -->
</div>
