<div>
    <!-- register area start -->
    <section class="tp-login-area p-5">
        <div class="tp-login-register-box d-flex align-items-center">
           <div class="tp-login-register-banner-box p-relative" data-background="{{asset('assets/images/bg/services-bg.jpg')}}" wire:ignore>
              <div class="tp-login-register-logo tp-header-logo">
                 <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
              </div>
              <div class="tp-login-register-heading">
                 <h3 class="tp-login-register-title">Discover world <br> best Schools, Colleges, Universitys here.</h3>
              </div>
              <div class="tp-login-register-shape">
                 <div class="shape-1">
                    <img src="{{asset('assets/img/login/login-register-shape-2.png')}}" alt="">
                 </div>
                 <div class="shape-2">
                    <img src="{{asset('assets/img/login/login-register-shape-1.png')}}" alt="">
                 </div>
                 <div class="shape-3">
                    <img src="{{asset('assets/img/login/login-register-shape-3.png')}}" alt="">
                 </div>
              </div>
           </div>
           <div class="tp-login-register-wrapper d-flex justify-content-center align-items-center">
              <div class="tp-login-from-box pt-5">

                 <div class="tp-login-from-heading text-center">
                    <h4 class="tp-login-from-title">Create an Account</h4>
                    <p>Already have an account? <a href="{{route('login')}}" wire:navigate> Sign In</a></p>
                 </div>


                 <div class="tp-login-input-form pt-20 pb-20">
                     <div class="row">
                        <div class="col-12 tpd-redio-style">
                           <div class="form-check form-check-inline">
                              <input type="radio" wire:model.live="user_type" value="student" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Student</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input type="radio" wire:model.live="user_type" value="institute" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Inistitute</label>
                           </div>
                        </div>
                     </div>

                    
              </div>
              @if ($user_type)
              <!-- register form -->
              {!! $html !!}
              <!-- register form end-->
              @endif
           </div>
        </div>
     </section>
     <!-- register area end -->
</div>
