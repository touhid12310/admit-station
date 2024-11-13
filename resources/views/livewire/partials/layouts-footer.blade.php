<div>
    <!-- footer-area-start -->
    <footer>
        <div class="tp-footer-main grey-bg pt-80 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="tp-footer-widget tp-footer-col-1 mb-30">
                            <div class="tp-footer-widget-logo mb-20 tp-header-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="tp-footer-widget-content">
                                <p>Dhaka Office: D/16,block -E,zakir Hossain road, bedise king khaled
                                    Institute,lalmatia,Mohammadpur,Dhaka-1207 Bangladesh</p>
                            </div>
                            <div class="tp-footer-widget-content">
                                <p>Chattogram Office: 1st floor,Agrabad shopping complex,1742 Sheikh Mujib Road,<br>
                                    Beside Orchid Business Hotel,Chowmuhony,Agrabad ,<br> Chittagong, Bangladesh</p>
                            </div>
                            <div class="tp-footer-widget-content">
                                <p>Malaysia Office: Suite 6.10, I-01-05, 6th Floor, Block I, Setiawalk, Persiaran
                                    Wawasan, Pusat Bandar, Puchong, 47160 Puchong, Selangor, Malaysia</p>
                            </div>
                            <div class="tp-footer-contact">
                                <span>Got Questions? Call us</span>
                                <a href="tel:8801621007177">+880 1621-007177</a>
                            </div>
                            <div class="tp-footer-contact-mail">
                                <a href="mailto:admitstation24@gmail.com">
                                    <span>
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M13 5.40039L10.496 7.40015C9.672 8.05607 8.32 8.05607 7.496 7.40015L5 5.40039"
                                                stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    admitstation24@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-sm-6">
                        <div class="tp-footer-widget tp-footer-col-2 mb-30">
                            <h4 class="tp-footer-widget-title mb-20">About</h4>
                            <div class="tp-footer-widget-link">
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('FAQs') }}" wire:navigate>FAQs</a></li>
                                    <li><a href="{{ route('privacy-policy') }}" wire:navigate>Privacy Policy</a></li>
                                    <li><a href="{{ route('become-a-agent') }}" wire:navigate>Become a Agent</a></li>
                                    <li><a href="{{ route('contact-us') }}" wire:navigate>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-8">
                        <div class="p-footer-widget tp-footer-col-4 mb-30">
                            <h4 class="tp-footer-widget-title mb-20">Our Newsletter</h4>
                            <div class="tp-footer-newsletter-wrap">
                                <p>Enter your email and we'll send you <br> more information</p>
                                <form action="#">
                                    <div class="tp-footer-newsletter-wrapper mb-30">
                                        <div class="tp-footer-newsletter-input">
                                            <input type="email" placeholder="Your email">
                                        </div>
                                        <div class="tp-footer-newsletter-submit">
                                            <button class="tp-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="tp-footer-newsletter-social">
                                    <a class="social-fb"
                                        href="https://www.facebook.com/people/Admit-Station/61563570187566/"
                                        target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="social-twit" href="https://x.com/admitstation24" target="_blank"><i
                                            class="fa-brands fa-x"></i></a>
                                    <a class="social-lnkd" href="#"><i class="fa-brands fa-linkedin-in"
                                            target="_blank"></i></a>
                                    <a class="social-yout" href="https://www.instagram.com/admitstation24/"
                                        target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-footer-copyright text-center">
                            <span>© {{ date('Y') }} <a href="{{ url('/') }}" wire:navigate>Admit Station </a>.
                                All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
</div>
