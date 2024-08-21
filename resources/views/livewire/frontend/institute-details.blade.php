<div>
   <!-- Course details breadcrumb start -->
   <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
      <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg"></div>
      <div class="container">
         <div class="row align-items-center">
            <div class="col-sm-12">
               <div class="tp-breadcrumb__content">
                  <div class="tp-breadcrumb__list inner-after">
                     <span><a href="{{route('institute-list')}}"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                     </svg></a></span>
                     <span>{{ $vendor->vendors_types }}</span>
                  </div>
                  <h3 class="tp-breadcrumb__title" style="color: #AB0C2F">{{ $vendor->name }}</h3>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Course details breadcrumb end -->
   
   <div wire:ignore>
      <img class="course-pink" src="{{$vendor->thumb_img}}" alt="{{$vendor->thumb_img}}">
   </div>

   <!-- Course details area start -->
   <section class="tp-course-details-area grey-bg pt-100 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-lg-9">
               <div class="tp-course-details-wrapper">
                  <div class="tp-course-details-heading">
                     <h3 class="tp-course-details-title">Computer Science</h3>
                     <p>Earn a bachelor's in computer science degree from Acadia University and develop the software engineering, project management and programming skills to impact how technology will change and transform our world.</p>
                     <div class="tp-course-details-thumb">
                        <img src="assets/img/course/details/course-details-thumb-1.jpg" alt="">
                     </div>
                     <h3 class="tp-course-details-title">Overview</h3>
                     <p>How we do business, how we communicate and what we do for entertainment are all being transformed by computer scientists and software developers. Quickly changing landscapes in these fields and beyond provide opportunities for people with advanced computer science skills to profoundly impact the world. Biola's computer science major allows future computer scientists to grow their knowledge in the field of computer science, while honing their abilities to innovate, program, solve problems and succeed across a range of careers.</p>
                     <p>Here's an overview of key topics and concepts within Computer Science:</p>
                     <div class="tp-course-details-list">
                        <ul>
                           <li><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" rx="10" fill="#FFDC69"/>
                           <path d="M14 7L8.5 12.5L6 10" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg></span>Programming</li>
                           <li><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" rx="10" fill="#FFDC69"/>
                           <path d="M14 7L8.5 12.5L6 10" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg></span>Big Data and Data Science</li>
                           <li><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" rx="10" fill="#FFDC69"/>
                           <path d="M14 7L8.5 12.5L6 10" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg></span>Artificial Intelligence (AI) and Machine Learning</li>
                           <li><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" rx="10" fill="#FFDC69"/>
                           <path d="M14 7L8.5 12.5L6 10" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg></span>Software Development</li>
                           <li><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" rx="10" fill="#FFDC69"/>
                           <path d="M14 7L8.5 12.5L6 10" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg></span>Algorithms and Data Structures</li>
                           <li><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           <rect width="20" height="20" rx="10" fill="#FFDC69"/>
                           <path d="M14 7L8.5 12.5L6 10" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg></span>Database Management</li>
                        </ul>
                     </div>
                     <p>The B.S.c in Computer Science offers expert training in computation and information processing strategies through a varied list of computer science courses.</p>
                     <h3 class="tp-course-details-title">Core Curriculum (Traditional Undergraduate)</h3>
                     <div class="tp-course-details-box">
                        <span>Semester 1</span>
                        <div class="row">
                           <div class="col-12">
                              <div class="tp-course-details-table mb-45">
                                 <ul>
                                    <li class="tp-course-details-table-head">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-title">Course ID</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-title">Course Title</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-title">Course Type</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-title">Credits</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">ENG-101</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Basic Functional English and English Spoken</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">GED Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">MAT-101</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Mathematics - I</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">GED Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-113</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Programming and Problem Solving</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">1.5</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-114</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Programming and Problem Solving Lab</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Lab</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <span>Semester 2</span>
                        <div class="row">
                           <div class="col-12">
                              <div class="tp-course-details-table mb-45">
                                 <ul>
                                    <li class="tp-course-details-table-head">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-title">Course ID</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-title">Course Title</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-title">Course Type</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-title">Credits</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-221</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Object Oriented Programming</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-222</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Object Oriented Programming Lab</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Lab</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">1.5</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-113</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Data Communication</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">2</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-114</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Systems Analysis and Design</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Lab</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <span>Semester 3</span>
                        <div class="row">
                           <div class="col-12">
                              <div class="tp-course-details-table mb-45">
                                 <ul>
                                    <li class="tp-course-details-table-head">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-title">Course ID</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-title">Course Title</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-title">Course Type</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-title">Credits</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-315</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Software Engineering</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-316</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Artificial Intelligence</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">2</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-311</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Database Management System</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-312</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Database Management System Lab</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Lab</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">1.5</h4>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <span>Semester 4</span>
                        <div class="row">
                           <div class="col-12">
                              <div class="tp-course-details-table mb-45">
                                 <ul>
                                    <li class="tp-course-details-table-head">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-title">Course ID</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-title">Course Title</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-title">Course Type</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-title">Credits</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-323</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Operating Systems</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">3</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-324</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Operating Systems Lab</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Lab</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">1.5</h4>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="tp-course-table-inner">
                                       <div class="tp-course-table-row">
                                          <div class="tp-course-id">
                                             <h4 class="tp-table-inner">CSE-113</h4>
                                          </div>
                                          <div class="tp-course-sub">
                                             <h4 class="tp-table-inner">Programming and Problem Solving</h4>
                                          </div>
                                          <div class="tp-course-type">
                                             <h4 class="tp-table-inner">Core Theory</h4>
                                          </div>
                                          <div class="tp-course-credits">
                                             <h4 class="tp-table-inner">2</h4>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tp-course-details-social">
                        <a href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                           <path d="M16 8.04889C16 3.60361 12.4183 0 8 0C3.58172 0 0 3.60361 0 8.04889C0 12.0663 2.92547 15.3962 6.75 16V10.3755H4.71875V8.04889H6.75V6.27562C6.75 4.25837 7.94438 3.1441 9.77172 3.1441C10.6467 3.1441 11.5625 3.3013 11.5625 3.3013V5.28208H10.5538C9.56 5.28208 9.25 5.90257 9.25 6.53972V8.04889H11.4688L11.1141 10.3755H9.25V16C13.0745 15.3962 16 12.0663 16 8.04889Z" fill="white"/>
                           </svg></span>Share</a>
                        <a class="black" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                           <path d="M12.1979 0H14.5729L9.38431 5.93026L15.4883 14H10.7089L6.96554 9.10574L2.68226 14H0.305846L5.85559 7.65692L0 0H4.90072L8.28441 4.47354L12.1979 0ZM11.3644 12.5785H12.6804L4.18564 1.34687H2.77344L11.3644 12.5785Z" fill="white"/>
                           </svg></span>Tweet</a>
                        <a class="sky" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                           <path d="M15.3039 0H1.66953C1.01641 0 0.488281 0.515625 0.488281 1.15313V14.8438C0.488281 15.4813 1.01641 16 1.66953 16H15.3039C15.957 16 16.4883 15.4813 16.4883 14.8469V1.15313C16.4883 0.515625 15.957 0 15.3039 0ZM5.23516 13.6344H2.86016V5.99687H5.23516V13.6344ZM4.04766 4.95625C3.28516 4.95625 2.66953 4.34062 2.66953 3.58125C2.66953 2.82188 3.28516 2.20625 4.04766 2.20625C4.80703 2.20625 5.42266 2.82188 5.42266 3.58125C5.42266 4.3375 4.80703 4.95625 4.04766 4.95625ZM14.1227 13.6344H11.7508V9.92188C11.7508 9.0375 11.7352 7.89687 10.5164 7.89687C9.28203 7.89687 9.09453 8.8625 9.09453 9.85938V13.6344H6.72578V5.99687H9.00078V7.04063H9.03203C9.34766 6.44063 10.1227 5.80625 11.2758 5.80625C13.6789 5.80625 14.1227 7.3875 14.1227 9.44375V13.6344Z" fill="white"/>
                           </svg></span>Share</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="tp-course-requrement-widget-box">
                  <div class="tp-course-requrement-widget mb-30">
                     <div class="tp-course-requrement-widget-content">
                        <a href="university-requirements.html">Degree Requirements</a>
                        <a href="university-apply.html">How to Apply</a>
                        <a href="university-leadership.html">Faculty & Staff</a>
                        <a href="university-financial.html">Financial Add</a>
                     </div>
                  </div>
                  <div class="tp-course-requrement-widget-btn mb-30">
                     <a class="tp-btn btn-1 w-100 text-center" href="university-request-info.html">Request information</a>
                     <a class="tp-btn btn-2 w-100 text-center" href="{{route('login')}}">Apply Now</a>
                  </div>
                  <div class="tp-course-requrement-widget-contact mb-30">
                     <h4 class="tp-course-requrement-widget-contact-title">Contact Us</h4>
                     <p>1810 Campus Way NEBothell,<br>
                        WA 98011-8246</p>
                     <a href="mailto:acadia@gmail.com"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                        <path opacity="0.4" d="M13.5 15.3H4.5C1.8 15.3 0 13.95 0 10.8V4.5C0 1.35 1.8 0 4.5 0H13.5C16.2 0 18 1.35 18 4.5V10.8C18 13.95 16.2 15.3 13.5 15.3Z" fill="#FFF7F1"/>
                        <path d="M9.00361 8.43302C8.24761 8.43302 7.48261 8.19902 6.89761 7.72202L4.08061 5.47202C3.79261 5.23802 3.73861 4.81502 3.97261 4.52702C4.20661 4.23902 4.62961 4.18503 4.91761 4.41903L7.73461 6.66902C8.41861 7.21802 9.5796 7.21802 10.2636 6.66902L13.0806 4.41903C13.3686 4.18503 13.8006 4.23002 14.0256 4.52702C14.2596 4.81502 14.2146 5.24702 13.9176 5.47202L11.1006 7.72202C10.5246 8.19902 9.75961 8.43302 9.00361 8.43302Z" fill="#FFF7F1"/>
                     </svg></span> admitstation24@gmail.com</a>
                     <a href="tel:90762"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M14.058 7.87487C13.671 7.87487 13.365 7.55987 13.365 7.18187C13.365 6.84887 13.032 6.15587 12.474 5.55287C11.925 4.96787 11.322 4.62587 10.818 4.62587C10.431 4.62587 10.125 4.31087 10.125 3.93287C10.125 3.55487 10.44 3.23987 10.818 3.23987C11.718 3.23987 12.663 3.72587 13.491 4.59887C14.265 5.41787 14.76 6.43487 14.76 7.17287C14.76 7.55987 14.445 7.87487 14.058 7.87487Z" fill="#FFF7F1"/>
                        <path d="M17.3058 7.875C16.9188 7.875 16.6128 7.56 16.6128 7.182C16.6128 3.987 14.0118 1.395 10.8258 1.395C10.4388 1.395 10.1328 1.08 10.1328 0.702C10.1328 0.324 10.4388 0 10.8168 0C14.7768 0 17.9988 3.222 17.9988 7.182C17.9988 7.56 17.6838 7.875 17.3058 7.875Z" fill="#FFF7F1"/>
                        <path opacity="0.4" d="M8.811 10.989L5.868 13.932C5.544 13.644 5.229 13.347 4.923 13.041C3.996 12.105 3.159 11.124 2.412 10.098C1.674 9.072 1.08 8.046 0.648 7.029C0.216 6.003 0 5.022 0 4.086C0 3.474 0.108 2.889 0.324 2.349C0.54 1.8 0.882 1.296 1.359 0.846C1.935 0.279 2.565 0 3.231 0C3.483 0 3.735 0.0540001 3.96 0.162C4.194 0.27 4.401 0.432 4.563 0.666L6.651 3.609C6.813 3.834 6.93 4.041 7.011 4.239C7.092 4.428 7.137 4.617 7.137 4.788C7.137 5.004 7.074 5.22 6.948 5.427C6.831 5.634 6.66 5.85 6.444 6.066L5.76 6.777C5.661 6.876 5.616 6.993 5.616 7.137C5.616 7.209 5.625 7.272 5.643 7.344C5.67 7.416 5.697 7.47 5.715 7.524C5.877 7.821 6.156 8.208 6.552 8.676C6.957 9.144 7.389 9.621 7.857 10.098C8.181 10.413 8.496 10.719 8.811 10.989Z" fill="#FFF7F1"/>
                        <path d="M17.9728 14.6969C17.9728 14.9489 17.9278 15.2099 17.8378 15.4619C17.8108 15.5339 17.7838 15.6059 17.7478 15.6779C17.5948 16.0019 17.3968 16.3079 17.1358 16.5959C16.6948 17.0819 16.2088 17.4329 15.6598 17.6579C15.6508 17.6579 15.6418 17.6669 15.6328 17.6669C15.1018 17.8829 14.5258 17.9999 13.9048 17.9999C12.9868 17.9999 12.0058 17.7839 10.9708 17.3429C9.93584 16.9019 8.90084 16.3079 7.87484 15.5609C7.52384 15.2999 7.17284 15.0389 6.83984 14.7599L9.78284 11.8169C10.0348 12.0059 10.2598 12.1499 10.4488 12.2489C10.4938 12.2669 10.5478 12.2939 10.6108 12.3209C10.6828 12.3479 10.7548 12.3569 10.8358 12.3569C10.9888 12.3569 11.1058 12.3029 11.2048 12.2039L11.8888 11.5289C12.1138 11.3039 12.3298 11.1329 12.5368 11.0249C12.7438 10.8989 12.9508 10.8359 13.1758 10.8359C13.3468 10.8359 13.5268 10.8719 13.7248 10.9529C13.9228 11.0339 14.1298 11.1509 14.3548 11.3039L17.3338 13.4189C17.5678 13.5809 17.7298 13.7699 17.8288 13.9949C17.9188 14.2199 17.9728 14.4449 17.9728 14.6969Z" fill="#FFF7F1"/>
                     </svg></span> +880 1839-440444</a>
                  </div>
                  <div class="tp-course-requrement-widget-faq">
                     <h4 class="tp-course-requrement-widget-faq-title">Do you have <br>
                        more questions?</h4>
                     <p>Read our <a href="{{route('FAQs')}}">FAQ</a></p>
                     <div class="tp-course-requrement-widget-faq-thumb">
                        <img src="assets/img/history/undergraduate/course-contact-bg.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Course details area end -->
</div>

