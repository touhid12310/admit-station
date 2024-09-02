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
                     <!-- form-start -->
                     <div class="tpd-content-layout">
                        <div class="tp-profile-wrapper">
                           <div class="row">
                              <div class="d-flex justify-content-between">
                                 <div class="tp-dashboard-section">
                                    <h2 class="tp-dashboard-title">Edit Institute Register</h2>
                                 </div>
                                 <div>
                                    <a wire:click="delete({{ $institute_id }})" href="#" class="btn btn-danger">Delete</a>
                                 </div>
                              </div>
                             
                              <div class="col-12">
                              <!-- Register Form -->
                              <div class="row">
                                 <div class="col-12">
                                    <form wire:submit.prevent="update">
                                       <!-- session msg-->
                                       @include('livewire.partials.flash-msg')
                                       <!-- end session msg-->
                                       <div class="tpd-setting-box profile">

                                          <div class="tpd-setting-from">
                                             <div class="row pt-50">

                                                <div class="col-lg-6">
                                                   <div class="tpd-input">
                                                      <label for="Institute Name">Institute Name</label>
                                                      <input type="text" wire:model="name" placeholder="Type Institute Name">
                                                   </div>
                                                   @error('name')
                                                      <div class="m-2 text-danger">{{ $message }}</div>
                                                   @enderror
                                                
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                   <div class="tpd-input">
                                                      <label for="Phone Number">Phone Number</label>
                                                      <input type="number" wire:model="mobile_no" placeholder="(+44) 433 962 004">
                                                   </div>
                                                   @error('mobile_no')
                                                      <div class="m-2 text-danger">{{ $message }}</div>
                                                   @enderror
                                                
                                                </div>

                                                <div class="col-lg-6">
                                                   <div class="tpd-input">
                                                      <label for="Institute Email">Institute Email</label>
                                                      <input type="email" wire:model="email" placeholder="institute@example.com">
                                                   </div>
                                                   @error('email')
                                                      <div class="m-2 text-danger">{{ $message }}</div>
                                                   @enderror
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                      <label for="Institute Type">Institute Type</label>
                                                      <div class="tpd-input pt-5 ">
                                                         <select class="form-control wide p-10" wire:model="institute_type">
                                                               <option>Select Institute Type</option>
                                                               <option value="School">School</option>
                                                               <option value="College">College</option>
                                                               <option value="University">University</option>
                                                         </select>
                                                      </div>
                                                      @error('institute_type')
                                                         <div class="m-2 text-danger">{{ $message }}</div>
                                                      @enderror
                                                </div>

                                                <div class="col-lg-6">
                                                      <div class="tpd-input">
                                                         <label for="EIIN No">EIIN No</label>
                                                         <input type="number" wire:model="EIIN" placeholder="Type Institute Name">
                                                      </div>
                                                      @error('EIIN')
                                                         <div class="m-2 text-danger">{{ $message }}</div>
                                                      @enderror
                                                   </div>
                                                <div class="col-lg-6">
                                                      <div class="tpd-date">
                                                         <label for="Established Year">Established Year</label>
                                                         <input type="date" wire:model="E_year" class="form-control" placeholder="Established Year" min="1900" max="{{ date('Y') }}">
                                                      </div>
                                                      @error('E_year')
                                                         <div class="m-2 text-danger">{{ $message }}</div>
                                                      @enderror
                                                   </div>
                                                <div class="col-lg-6">
                                                      <div class="tpd-date">
                                                         <label for="Country">Country</label>
                                                         <input type="text" wire:model="country" placeholder="Type Country Name">
                                                      </div>
                                                      @error('country')
                                                         <div class="m-2 text-danger">{{ $message }}</div>
                                                      @enderror
                                                   </div>
                                                <div class="col-lg-6">
                                                      <div class="tpd-date">
                                                         <label for="City">City</label>
                                                         <input type="text" wire:model="city" placeholder="City">
                                                      </div>
                                                      @error('city')
                                                         <div class="m-2 text-danger">{{ $message }}</div>
                                                      @enderror
                                                </div>
                                                <div class="col-lg-12 pt-20">
                                                      <div class="tpd-date">
                                                         <label for="Address">Address</label>
                                                         <input type="text" wire:model="address" placeholder="Address">
                                                      </div>
                                                      @error('address')
                                                         <div class="m-2 text-danger">{{ $message }}</div>
                                                      @enderror
                                                   </div>


                                                <div class="col-lg-6 pt-20">
                                                   <div class="tpd-input">
                                                      <label for="Institute logo">Institute logo</label>
                                                      <input type="file" wire:model="logo" class="p-2">
                                                   </div>
                                                   <div>
                                                      <img src="{{ asset($logo) }}" alt="" width="50%" height="50%" wire:ignore>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6 pt-20">
                                                   <div class="tpd-input">
                                                      <label for="Institute Image">Institute Image</label>
                                                      <input type="file" wire:model="thumb_img" class="p-2">
                                                   </div>
                                                   <div>
                                                      <img src="{{ asset($thumb_img) }}" alt="" width="70%" height="70%" wire:ignore>
                                                   </div>
                                                </div>
                                                
                                                <div class="col-lg-12 pt-20">
                                                   <div class="tpd-input">
                                                      <label for="Description">Description</label>
                                                      <textarea wire:model="description" placeholder="Institute description for London, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences."></textarea>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="tpd-setting-cartificate">
                                             <div class="tpd-setting-cartificate-btn">
                                                <button> <span wire:loading.remove>Update</span>
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
                              <!-- End Register Form-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- form-content-area-end -->
                 </div>
              </div>
           </div>
        </section>
        <!-- dashboad-content-box-area-end -->

     </main>
</div>


