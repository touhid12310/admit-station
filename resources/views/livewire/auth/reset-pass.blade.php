<div>
    <!-- login area start -->
    <section class="tp-login-area">
        <div class="tp-login-register-box d-flex align-items-center pt-120">
           <div class="tp-login-register-banner-box p-relative d-none d-md-block" data-background="{{asset('assets/img/login/login-register-bg.jpg')}}" wire:ignore>
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
              <div class="tp-login-from-box">
                 <div class="tp-login-from-heading text-center">
                    <h4 class="tp-login-from-title" style="color: #AB0C2F">Reset Password</h4>
                    <p>Already Have Account? <a href="{{route('login')}}" wire:navigate>Sign In</a></p>
                 </div>
                 <form wire:submit.prevent='updatePassword' class="mb-3">
                      <!-- flash message -->
                      @include('livewire.partials.flash-msg')
                      <!-- /flash message -->
                     <div class="row">
                        <div class="col-12">
                            <div class="tp-login-from-input mb-3">
                                <input type="hidden" wire:model="token" value="{{$token}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tp-login-from-input mb-3">
                                <label for="password">New Password</label>
                                <input type="password" id="password" wire:model="password" placeholder="Enter new password">
                                @error('password')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="tp-login-from-input mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" wire:model="password_confirmation" placeholder="Confirm your password">
                                @error('password_confirmation')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-12">
                           <div class="tp-login-from-btn">
                              <button class="tp-btn-inner w-100 text-center" style="background-color: #AB0C2F">
                                 <span wire:loading.remove>Change Password</span>
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
    </section>
    <!-- login area end -->
</div>
