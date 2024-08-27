<div>
    <!-- login area start -->
    <section class="tp-login-area">
        <div class="tp-login-register-box d-flex align-items-center">
            <div class="tp-login-register-banner-box p-relative"
                data-background="{{ asset('assets/images/bg/services-bg.jpg') }}" wire:ignore>
                <div class="tp-login-register-logo tp-header-logo">
                    <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                </div>
                <div class="tp-login-register-heading">
                    <h3 class="tp-login-register-title">Discover world <br> best Schools, Colleges, Universitys here.
                    </h3>
                </div>
                <div class="tp-login-register-shape">
                    <div class="shape-1">
                        <img src="{{ asset('assets/img/login/login-register-shape-2.png') }}" alt="">
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('assets/img/login/login-register-shape-1.png') }}" alt="">
                    </div>
                    <div class="shape-3">
                        <img src="{{ asset('assets/img/login/login-register-shape-3.png') }}" alt="">
                    </div>
                </div>
            </div>

            @include('livewire.partials.flash-msg')

            <div class="tp-login-register-wrapper d-flex justify-content-center align-items-center">
                <div class="tp-login-from-box">
                    <div class="tp-login-from-heading text-center">
                        <h4 class="tp-login-from-title">Create an Account</h4>
                        <p>Already have an account? <a href="{{route('login')}}"> Sign In</a></p>
                    </div>

                    <div class="tp-login-input-form">
                        <div class="row">
                            <form wire:submit.prevent="save" class="mb-3">

                                <div class="col-12">
                                    <div class="tp-login-input p-relative tpd-select" wire:ignore>
                                        <label for="UserType">User Type:</label>
                                        <select class="wide user_type " wire:model="user_type" required>
                                            <option value="">Select your type</option>
                                            <option value="student">Student</option>
                                            <option value="institute">Inistitute</option>
                                        </select>
                                    </div>
                                    @error('user_type')
                                        <div class="m-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div><br>


                                @if ($user_type == 'institute')
                                    <!-- Student register area end -->
                                    <div class="col-12" wire:ignore>
                                        <div class="tp-login-input p-relative tpd-select">
                                            <label for="UserType">Institute Type:</label>
                                            <select class="wide institute_type " wire:change="institute_type" required>
                                                <option value="">Type your institute type</option>
                                                <option value="University">University</option>
                                                <option value="Collage">Collage</option>
                                                <option value="School">School</option>
                                            </select>
                                        </div>
                                        @error('institute_type')
                                            <div class="m-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div><br>
                                @endif
                                <!-- register form -->
                                @if ($user_type)

                                    @if ($user_type == 'institute')
                                        <div class="col-12">
                                            <div class="tp-login-input p-relative">
                                                <label>Institute Name</label>
                                                <input type="text" wire:model="name"
                                                    placeholder="Enter Institute Name" autofocus
                                                    autocomplete="full_name">
                                            </div>
                                            @error('name')
                                                <div class="m-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @elseif($user_type == 'student')
                                        <div class="col-12">
                                            <div class="tp-login-input p-relative">
                                                <label>Full Name</label>
                                                <input type="text" wire:model="name" placeholder="Enter Full Name"
                                                    autofocus autocomplete="full_name">
                                            </div>
                                            @error('name')
                                                <div class="m-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    @endif

                                    <div class="col-12">
                                        <div class="tp-login-input p-relative">
                                            <label>Email</label>
                                            <input type="email" wire:model="email" placeholder="Enter Institute Email"
                                                autofocus autocomplete="email">
                                        </div>
                                        @error('email')
                                            <div class="m-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="tp-login-input p-relative">
                                            <label>Phone</label>
                                            <input type="number" wire:model="phone_no" placeholder="" autofocus
                                                autocomplete="phone_no">
                                        </div>
                                        @error('phone_no')
                                            <div class="m-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="tp-login-input p-relative">
                                            <label>Password</label>
                                            <div class="password-input p-relative">
                                                <input type="password" wire:model="password" placeholder="Password">
                                            </div>
                                            @error('password')
                                                <div class="m-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tp-login-input p-relative">
                                            <label>Confirm Password</label>
                                            <div class="password-input p-relative">
                                                <input type="password" wire:model="confirmed_password"
                                                    placeholder="Confirm Password">
                                            </div>
                                            @error('confirmed_password')
                                                <div class="m-2 text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="tp-login-from-btn">
                                            <button class="tp-btn-inner w-100 text-center">
                                                <span wire:loading.remove>Register</span>
                                                <span wire:loading>
                                                    <div class="spinner-border text-light" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- End Student register area end -->
                                @endif
                                <!-- register form end-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register area end -->
</div>

@script
    <script>
        $(".user_type").niceSelect();
        $(".institute_type").niceSelect();

        $('.user_type').on('change', function() {
            @this.set('user_type', this.value);
            setTimeout(() => {
                // $(".user_type").niceSelect();
                $(".institute_type").niceSelect();
            }, 500);
        })

        // Listen to the change event
        $('body').on('change', '.institute_type', function(e) {
            @this.set('institute_type', this.value); // Update Livewire model manually
            // setTimeout(() => {
            //     $(".user_type").niceSelect();
            //     $(".institute_type").niceSelect();
            // }, 300);
        });
    </script>
@endscript
