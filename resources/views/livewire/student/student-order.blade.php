<div>
    <main class="tp-dashboard-body-bg">

        <!-- dashboard-banner-area-start -->
        <section class="tp-dashboard-banner-wrap">
           <div class="tp-dashboard-banner-shape"><img src="assets/img/dashboard/bg/dashboard-bg-shape-1.jpg" alt=""></div>
           <div class="container">
              <div class="row">
                 <div class="col-lg-12">
                    <div class="tp-dashboard-banner-bg mt-30" data-background="assets/img/dashboard/bg/dashboard-bg-1.jpg">
                       <div class="tp-instructor-wrap d-flex justify-content-between">
                          <div class="tp-instructor-info d-flex">
                             <div class="tp-instructor-avatar">
                                <img src="assets/img/dashboard/profile/dashboard-profile-2.jpg" alt="">
                             </div>
                             <div class="tp-instructor-content">
                                <h4 class="tp-instructor-title">Indigo Violet</h4>
                                <div class="tp-instructor-rate  d-flex align-items-center">
                                   <div class="tp-instructor-rating">
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                      <i class="fa-solid fa-star"></i>
                                   </div>
                                   <span>4.61</span>
                                   <span>(18 Ratings)</span>
                                </div>
                             </div>
                          </div>
                          <div class="tp-instructor-course-btn">
                             <a class="tp-btn-add-course" href="instructor-create-new-course.html"><i class="fa-regular fa-plus"></i> Create a New Course</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- dashboard-banner-area-end -->

        <!-- dashboad-content-box-area-start -->
        <section class="tpd-main pb-75">
           <div class="container">
              <div class="row">
                 <div class="col-lg-3">

                    <!-- dashboard-menu-area-start -->
                    @livewire('partials.layouts-dashboard-menu-aside')
                    <!-- dashboard-menu-area-end -->

                 </div>
                 <div class="col-lg-9">
                    
                    <!-- dashboard-content-area-start -->
                    <div class="tpd-content-layout">
  
                       <!-- order-area-start -->
                       <section class="tpd-order-area">
                          <div class="row">
                             <div class="col-lg-6">
                                <div class="tp-dashboard-section">
                                   <h2 class="tp-dashboard-title">Order History</h2>
                                </div>
                             </div>
                          </div>
                          <div class="tpd-table mb-45">
                             <ul>
                                <li class="tpd-table-head">
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-table-title">Order ID</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-table-title">Course Name</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-table-title">Date</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-table-title">Price</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <h4 class="tpd-table-title">Status</h4>
                                      </div>
                                      <div class="tpd-order-action"></div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4024</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">Application</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">March 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$50.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge warning">On Hold</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4056</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">Design System in Figma</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">June 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$100.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge sucess">Success</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4034</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">App Development</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">May 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$76.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge info">Processing</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4018</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">Graphic</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">March 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$00.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge danger">Canceled</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4056</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">Digital Marketing Courses</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">June 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$100.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge sucess">Success</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4018</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">Application</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">June 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$100.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge warning">On Hold</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="tpd-table-row">
                                      <div class="tpd-order-id">
                                         <h4 class="tpd-common-text">#4056</h4>
                                      </div>
                                      <div class="tpd-order-name">
                                         <h4 class="tpd-common-text">Digital Marketing Courses</h4>
                                      </div>
                                      <div class="tpd-order-date">
                                         <h4 class="tpd-common-text">June 2, 2024</h4>
                                      </div>
                                      <div class="tpd-order-price">
                                         <h4 class="tpd-common-text">$100.00</h4>
                                      </div>
                                      <div class="tpd-order-status">
                                         <div class="tpd-badge-item">
                                            <span class="tpd-badge sucess">Success</span>
                                         </div>
                                      </div>
                                      <div class="tpd-order-action">
                                         <div class="tpd-action-btn">
                                            <button>
                                               <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M13 8.23975V10.7466C13 11.079 12.8595 11.3979 12.6095 11.6329C12.3594 11.868 12.0203 12.0001 11.6667 12.0001H2.33333C1.97971 12.0001 1.64057 11.868 1.39052 11.6329C1.14048 11.3979 1 11.079 1 10.7466V8.23975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M10.3327 5.38704L6.99935 8.52063L3.66602 5.38704" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  <path d="M7 1V8.52061" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                  </svg>
                                               <span class="tpd-action-tooltip">Download</span>
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </li>
                             </ul>
                          </div>
                       </section>
                       <!-- order-area-startend -->
  
                    </div>
                    <!-- dashboard-content-area-end -->

                 </div>
              </div>
           </div>
        </section>
        <!-- dashboad-content-box-area-end -->

     </main>
</div>
