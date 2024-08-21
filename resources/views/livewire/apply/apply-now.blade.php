<div>
<!-- application area start -->
<section class="tp-application-area grey-bg pt-150 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-application-heading wow fadeInUp" data-wow-delay=".3s">
                    <p class="tp-application-subtitle">Ready to find out what sets us apart?</p>
                    <h3 class="tp-application-title">Start  your Application</h3>
                </div>
                <div class="tp-application-from-box wow fadeInUp" data-wow-delay=".5s">
                <form id="contact-form" action="assets/mail.php" method="POST">
                    <div class="tp-contact-input-form application">
                        <h4 class="tp-application-from-title">Applicant Details</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>First name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Last name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Email address</label>
                                    <input type="email">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Zip code</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Phone number</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                            <div class="tp-contact-input schedule p-relative">
                                <label>Date of birth</label>
                                <input name="datetime-local" type="text" id="datetime-picker" placeholder="Choose Date">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                    <path d="M13.4444 2.55554H2.55556C1.69645 2.55554 1 3.25199 1 4.1111V15C1 15.8591 1.69645 16.5555 2.55556 16.5555H13.4444C14.3036 16.5555 15 15.8591 15 15V4.1111C15 3.25199 14.3036 2.55554 13.4444 2.55554Z" stroke="#B8BABC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.1113 1V4.11111" stroke="#B8BABC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.88867 1V4.11111" stroke="#B8BABC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 7.22223H15" stroke="#B8BABC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg></span>
                            </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                            <div class="tp-contact-input schedule p-relative">
                                <label>Student type</label>
                                <div class="tp-application-select">
                                    <select class="wide">
                                        <option value="Csc">Csc</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Eee">Eee</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-contact-input-form application">
                        <h4 class="tp-application-from-title">Education Records</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>School</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Year of completion</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Highest qualification</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Current status</label>
                                    <div class="tp-application-select">
                                        <select class="wide">
                                            <option value="Csc">New</option>
                                            <option value="Architecture">Old</option>
                                            <option value="Eee">Newst</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-contact-input-form application">
                        <h4 class="tp-application-from-title">Education Details</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Select area of study</label>
                                    <div class="tp-application-select">
                                        <select class="wide">
                                            <option value="Csc">New</option>
                                            <option value="Architecture">Old</option>
                                            <option value="Eee">Newst</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Degree level</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-contact-input-form application">
                        <h4 class="tp-application-from-title">Documentation</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Upload passport or birth documentation</label>
                                    <input type="text">
                                    <input id="cv" type="file" hidden="">
                                    <label class="hide" for="cv">
                                        <span>Choose File</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Upload Curriculum Vitae (CV) or Resume</label>
                                    <input type="text">
                                    <input id="cvi" type="file" hidden="">
                                    <label class="hide" for="cvi">
                                        <span>Choose File</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-contact-input-form">
                        <h4 class="tp-application-from-title">Additional Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Application full name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tp-contact-input schedule p-relative">
                                    <label>Additional information</label>
                                    <textarea ></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="tp-contact-input-remeber schedule">
                                    <input id="remeber" type="checkbox">
                                    <label for="remeber">By submitting this form, you agree to the Acadia University privacy notice.</label>
                                </div>
                            </div>
                            <div class="tp-schedule-btn">
                                <button class="tp-btn">Submit Aplication <span><svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path d="M1 11L6 6L1 1" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></span>
                                </button>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- application area end -->
</div>
