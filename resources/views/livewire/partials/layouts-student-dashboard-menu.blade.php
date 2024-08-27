<div>
    <!-- back to top start -->
    <div class="back-to-top-wrapper">
       <button id="back_to_top" type="button" class="back-to-top-btn">
             <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                   stroke-linejoin="round" />
             </svg>
       </button>
    </div>
    <!-- back to top end -->
    
    <!-- search area start -->
    <div class="tp-search-area">
       <div class="tp-search-inner p-relative">
             <div class="tp-search-close">
                <button class="tp-search-close-btn">
                   <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path class="path-1" d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                   <path class="path-2" d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                   </svg>
                </button>
             </div>
             <div class="container">
                <div class="row">
                   <div class="tp-search-wrapper">
                   <div class="col-lg-9">
                         <div class="tp-search-content">
                            <div class="search p-relative">
                               <input type="text" class="search-input" placeholder="What are you looking for?">
                               <button class="tp-search-icon">
                               <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                     <path d="M13.3989 13.4001L16.9989 17.0001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                     <path d="M15.3999 8.2001C15.3999 4.22366 12.1764 1.00012 8.19997 1.00012C4.22354 1.00012 1 4.22366 1 8.2001C1 12.1765 4.22354 15.4001 8.19997 15.4001C12.1764 15.4001 15.3999 12.1765 15.3999 8.2001Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                               </svg>
                               </button>
                            </div>
                         </div>
                   </div>
                   </div>
                </div>
             </div>
       </div>
    </div>
    <!-- search area end -->


    <!-- header-area-start -->
    <header class="header-area p-relative">
      <div id="header-sticky" class="tp-header-2 tp-header-shop">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-4 col-lg-6 col-6">
                  <div class="tp-header-2-right d-flex align-items-center">
                     <div class="tp-header-shop-logo tp-header-logo pr-20">
                        <a href="{{ url('/') }}" wire:navigate>
                           <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        </a>
                     </div>
                     <div class="tp-header-shop-search p-relative d-none d-lg-block">
                        <form action="#">
                           <input type="text" placeholder="Search...">
                           <button class="tp-header-search-btn" type="submit">
                              <span>
                                 <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.625 12.625L16 16" stroke="#8B8B8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.5 7.75C14.5 4.02208 11.4779 1 7.75 1C4.02208 1 1 4.02208 1 7.75C1 11.4779 4.02208 14.5 7.75 14.5C11.4779 14.5 14.5 11.4779 14.5 7.75Z" stroke="#8B8B8B" stroke-width="1.5" stroke-linejoin="round" />
                                 </svg>
                              </span>
                           </button>
                        </form>
                     </div>
                  </div>
               </div>
              
               <div class="col-xxl-3 col-lg-6 col-6">
                  <div class="tp-header-2-contact tp-header-shop d-flex align-items-center justify-content-end">
                    
                     <div class="tp-header-shop-login tp-header-user-hover">
                        <button>
                           @if (auth()->user()->photo)
                              <img src="{{ asset( Auth::user()->photo) }}" alt="">
                           @else
                              <img src="{{ asset('assets/images/profile.png') }}" alt="">
                           @endif
                        </button>
                        <div class="tp-header-user-box">
                           <div class="tp-header-user-content">
                              <div class="tp-header-user-profile d-flex align-items-center">
                                 <div class="tp-header-user-profile-thumb">
                                    @if (auth()->user()->photo)
                                       <img src="{{ asset( Auth::user()->photo) }}" alt=""/>
                                    @else
                                       <img src="{{ asset('assets/images/profile.png') }}" alt="">
                                    @endif
                                 </div>
                                 <div class="tp-header-user-profile-content">
                                    <h4>{{$name}}</h4>
                                    <span class="uppercase">{{$user_type}}</span>
                                 </div>
                              </div>
                              <div class="tp-header-user-list">
                                 <ul>
                                    <li>
                                       <a href="{{ route('student.dashboard')}}" wire:navigate><span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path opacity="0.4" d="M16.0041 5.216V1.584C16.0041 0.456 15.4921 0 14.2201 0H10.9881C9.7161 0 9.2041 0.456 9.2041 1.584V5.208C9.2041 6.344 9.7161 6.792 10.9881 6.792H14.2201C15.4921 6.8 16.0041 6.344 16.0041 5.216Z" fill="currentColor"></path>
                                       <path d="M16.0041 14.216V10.984C16.0041 9.71195 15.4921 9.19995 14.2201 9.19995H10.9881C9.7161 9.19995 9.2041 9.71195 9.2041 10.984V14.216C9.2041 15.488 9.7161 16 10.9881 16H14.2201C15.4921 16 16.0041 15.488 16.0041 14.216Z" fill="currentColor"></path>
                                       <path d="M6.8 5.216V1.584C6.8 0.456 6.288 0 5.016 0H1.784C0.512 0 0 0.456 0 1.584V5.208C0 6.344 0.512 6.792 1.784 6.792H5.016C6.288 6.8 6.8 6.344 6.8 5.216Z" fill="currentColor"></path>
                                       <path opacity="0.4" d="M6.8 14.216V10.984C6.8 9.71195 6.288 9.19995 5.016 9.19995H1.784C0.512 9.19995 0 9.71195 0 10.984V14.216C0 15.488 0.512 16 1.784 16H5.016C6.288 16 6.8 15.488 6.8 14.216Z" fill="currentColor"></path>
                                       </svg></span>My Dashboard</a>
                                    </li>
                                    <li>
                                       <a href="{{ route('student-profile')}}" wire:navigate>
                                          <span>
                                             <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M7.98015 8.78062C10.4049 8.78062 12.3705 6.81501 12.3705 4.39031C12.3705 1.96561 10.4049 0 7.98015 0C5.55545 0 3.58984 1.96561 3.58984 4.39031C3.58984 6.81501 5.55545 8.78062 7.98015 8.78062Z" fill="currentColor"></path><path d="M7.98158 10.9755C3.58249 10.9755 0 13.9258 0 17.5609C0 17.8068 0.193174 18 0.439031 18H15.5241C15.77 18 15.9632 17.8068 15.9632 17.5609C15.9632 13.9258 12.3807 10.9755 7.98158 10.9755Z" fill="currentColor"></path>
                                             </svg>
                                          </span>
                                          My Profile
                                       </a>
                                    </li>
                                 
                                    <li>
                                       <a href="{{ route('student-reviews')}}" wire:navigate><span><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path opacity="0.4" d="M9.2432 0.516728L11.1181 4.28454C11.2563 4.55752 11.5199 4.74709 11.824 4.78922L16.0354 5.40258C16.2813 5.43712 16.5045 5.56687 16.6553 5.76487C16.8044 5.96034 16.8684 6.20804 16.8322 6.45153C16.8027 6.65374 16.7075 6.84079 16.5618 6.98402L13.5102 9.94215C13.287 10.1486 13.1859 10.4544 13.2398 10.7535L13.9912 14.9123C14.0712 15.4144 13.7385 15.8879 13.2398 15.9831C13.0343 16.016 12.8238 15.9814 12.6385 15.8871L8.88186 13.9299C8.60306 13.7892 8.27373 13.7892 7.99493 13.9299L4.23834 15.8871C3.77676 16.1322 3.20485 15.9654 2.94796 15.5105C2.85278 15.3293 2.81909 15.1229 2.85025 14.9215L3.60157 10.7619C3.65548 10.4637 3.55356 10.1562 3.3312 9.94973L0.279593 6.99328C-0.0834322 6.64279 -0.094382 6.06565 0.255167 5.70252C0.262747 5.69494 0.27117 5.68651 0.279593 5.67809C0.424466 5.53065 0.614823 5.43712 0.820341 5.41269L5.03177 4.79848C5.33499 4.75551 5.59863 4.56763 5.73761 4.29296L7.54515 0.516728C7.70603 0.193195 8.03957 -0.00817085 8.40176 0.000254489H8.51462C8.8288 0.0381685 9.10254 0.232794 9.2432 0.516728Z" fill="currentColor"></path><path d="M8.41433 13.8249C8.25121 13.83 8.0923 13.8738 7.94936 13.9522L4.21113 15.905C3.75373 16.1232 3.20637 15.9538 2.94992 15.5164C2.85491 15.3378 2.82044 15.133 2.85239 14.9324L3.59903 10.7816C3.64947 10.4799 3.54858 10.1731 3.32913 9.96072L0.276158 7.00503C-0.08623 6.65022 -0.0929565 6.06784 0.261864 5.7046C0.266909 5.69954 0.271113 5.69533 0.276158 5.69111C0.420776 5.54784 0.607436 5.45344 0.808388 5.42395L5.02335 4.80365C5.32857 4.76488 5.59342 4.57441 5.72795 4.29797L7.56007 0.474205C7.73411 0.165741 8.06791 -0.0179882 8.42105 0.0013961C8.41433 0.251707 8.41433 13.6547 8.41433 13.8249Z" fill="currentColor"></path>
                                       </svg></span>Reviews</a>
                                    </li>
                                    
                                    <li><a href="{{route('student-order')}}"  wire:navigate><span><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path opacity="0.4" d="M14.2903 2.86564H13.9703L11.2667 0.16198C11.0507 -0.0539932 10.6987 -0.0539932 10.4748 0.16198C10.2588 0.377953 10.2588 0.729909 10.4748 0.953881L12.3865 2.86564H4.61149L6.52325 0.953881C6.73922 0.737908 6.73922 0.385952 6.52325 0.16198C6.30727 -0.0539932 5.95532 -0.0539932 5.73135 0.16198L3.03568 2.86564H2.71572C1.99581 2.86564 0.5 2.86564 0.5 4.91339C0.5 5.68929 0.65998 6.20122 0.995938 6.53718C1.18791 6.73716 1.41989 6.84114 1.66785 6.89714C1.89982 6.95313 2.14779 6.96113 2.38776 6.96113H14.6102C14.8582 6.96113 15.0902 6.94513 15.3141 6.89714C15.9861 6.73716 16.498 6.25722 16.498 4.91339C16.498 2.86564 15.0022 2.86564 14.2903 2.86564Z" fill="currentColor"></path>
                                       <path d="M14.6193 6.96103H2.38886C2.15688 6.96103 1.90092 6.95303 1.66895 6.88904L2.67682 13.0403C2.90079 14.4161 3.50072 15.9999 6.16438 15.9999H10.6518C13.3475 15.9999 13.8274 14.6481 14.1154 13.1363L15.3232 6.88904C15.0993 6.94503 14.8593 6.96103 14.6193 6.96103ZM8.50009 13.2002C6.62833 13.2002 5.10052 11.6724 5.10052 9.80067C5.10052 9.47272 5.37248 9.20075 5.70044 9.20075C6.0284 9.20075 6.30037 9.47272 6.30037 9.80067C6.30037 11.0165 7.28424 12.0004 8.50009 12.0004C9.71594 12.0004 10.6998 11.0165 10.6998 9.80067C10.6998 9.47272 10.9718 9.20075 11.2997 9.20075C11.6277 9.20075 11.8997 9.47272 11.8997 9.80067C11.8997 11.6724 10.3719 13.2002 8.50009 13.2002Z" fill="currentColor"></path>
                                    </svg></span>Apply List</a></li>
                                 
                                    <li class="hr-border"></li>
                                    <li>
                                       <a href="{{route('student-setting-profile')}}" wire:navigate>
                                          <span>
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.60509 10.2644C6.32151 10.2644 5.2832 9.26439 5.2832 8.00839C5.2832 6.75239 6.32151 5.74438 7.60509 5.74438C8.88867 5.74438 9.90245 6.75239 9.90245 8.00839C9.90245 9.26439 8.88867 10.2644 7.60509 10.2644Z" fill="currentColor"></path>
                                                <path opacity="0.4" d="M14.9841 9.896C14.8288 9.656 14.608 9.416 14.3219 9.264C14.093 9.152 13.9458 8.968 13.815 8.752C13.398 8.064 13.6433 7.16 14.3382 6.752C15.1558 6.296 15.4174 5.28 14.9432 4.488L14.3955 3.544C13.9294 2.752 12.9075 2.472 12.0981 2.936C11.3786 3.32 10.4548 3.064 10.0378 2.384C9.90702 2.16 9.83344 1.92 9.84979 1.68C9.87432 1.368 9.77621 1.072 9.62905 0.832C9.32655 0.336 8.77878 0 8.17378 0H7.02101C6.42419 0.016 5.87642 0.336 5.57392 0.832C5.41858 1.072 5.32865 1.368 5.345 1.68C5.36135 1.92 5.28777 2.16 5.15696 2.384C4.74 3.064 3.81615 3.32 3.10487 2.936C2.28731 2.472 1.27352 2.752 0.799336 3.544L0.251567 4.488C-0.214445 5.28 0.0471757 6.296 0.856566 6.752C1.5515 7.16 1.79677 8.064 1.38798 8.752C1.249 8.968 1.10184 9.152 0.872917 9.264C0.594945 9.416 0.349675 9.656 0.218865 9.896C-0.0836348 10.392 -0.0672835 11.016 0.235216 11.536L0.799336 12.496C1.10184 13.008 1.66596 13.328 2.2546 13.328C2.53258 13.328 2.8596 13.248 3.12122 13.088C3.32561 12.952 3.57088 12.904 3.84068 12.904C4.65007 12.904 5.32865 13.568 5.345 14.36C5.345 15.28 6.09716 16 7.04554 16H8.15743C9.09763 16 9.84979 15.28 9.84979 14.36C9.87432 13.568 10.5529 12.904 11.3623 12.904C11.6239 12.904 11.8692 12.952 12.0817 13.088C12.3434 13.248 12.6622 13.328 12.9484 13.328C13.5288 13.328 14.093 13.008 14.3955 12.496L14.9678 11.536C15.2621 11 15.2866 10.392 14.9841 9.896Z" fill="currentColor"></path>
                                                </svg>
                                          </span>
                                          Settings
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route('logout') }}" wire:navigate>
                                          <span>
                                             <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M9.94863 0C10.3714 0 10.7222 0.341829 10.7222 0.773613V17.2264C10.7222 17.6492 10.3804 18 9.94863 18C4.65028 18 0.953125 14.3028 0.953125 9.0045C0.953125 3.70615 4.65927 0 9.94863 0Z" fill="currentColor"></path>
                                                <path d="M16.5143 8.58188L13.9596 6.01816C13.6987 5.75729 13.2669 5.75729 13.006 6.01816C12.7452 6.27903 12.7452 6.71082 13.006 6.97169L14.4093 8.37498H5.80064C5.43182 8.37498 5.12598 8.68083 5.12598 9.04965C5.12598 9.41846 5.43182 9.72431 5.80064 9.72431H14.4093L13.006 11.1276C12.7452 11.3885 12.7452 11.8203 13.006 12.0811C13.141 12.2161 13.3119 12.279 13.4828 12.279C13.6537 12.279 13.8246 12.2161 13.9596 12.0811L16.5143 9.51741C16.7752 9.26554 16.7752 8.84275 16.5143 8.58188Z" fill="currentColor"></path>
                                                </svg>
                                          </span>
                                          Logout
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-area-end -->
</div>



