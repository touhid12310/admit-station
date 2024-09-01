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
                     @if (!$Institute)
                        <!-- form-start -->
                        <div class="tpd-content-layout">
                           <div class="tp-profile-wrapper">
                              <div class="row">
                                 <div class="tp-dashboard-section">
                                    <h2 class="tp-dashboard-title">Institute Register</h2>
                                 </div>
                                 <div class="col-12">
                                 <!-- Register Form -->
                                 <div class="row">
                                    <div class="col-12">
                                       <form wire:submit.prevent="save">
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
                                                   </div>
                                                   <div class="col-lg-6 pt-20">
                                                      <div class="tpd-input">
                                                         <label for="Institute Image">Institute Image</label>
                                                         <input type="file" wire:model="thumb_img" class="p-2">
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
                     @else
                        <!-- List -->
                        <div class="tpd-content-layout">
                           <div class="tp-profile-wrapper">
                              <div class="tp-dashboard-section">
                                 <h2 class="tp-dashboard-title">Institute List</h2>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="tp-profile-box">
                                       <div class="bg-white rounded">
                                          <div class="table-responsive">
                                             <table class="table table-hover table-bordered">
                                                <thead class="bg-light">
                                                <tr>
                                                      <th scope="col"  class="tpd-table-title">Institute Name</th>
                                                      <th scope="col"  class="tpd-table-title text-center">Type</th>
                                                      <th scope="col"  class="tpd-table-title text-center">EIIN</th>
                                                      <th scope="col"  class="tpd-table-title text-center">E.Year</th>
                                                      <th scope="col"  class="tpd-table-title text-center">Status</th>
                                                      <th scope="col"  class="tpd-table-title text-center">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                   @forelse ($applys as $apply)
                                                      <tr>
                                                         <td class="tpd-common-text">
                                                            <a href="">{{$apply->name}}</a>
                                                         </td>
                                                         <td class="tpd-common-text text-center">{{$apply->institute_type}}</td>
                                                         <td class="tpd-common-text text-center">{{$apply->EIIN}}</td>
                                                         <td class="tpd-common-text text-center">{{$apply->E_year}}</td>
                                                         <td class="tpd-common-text text-center">
                                                            @if ($apply->app_status == 'Approved')
                                                               <div class="tpd-badge-item">
                                                                  <span class="tpd-badge bg-success text-white">{{$apply->app_status}}</span>
                                                               </div>
                                                            @elseif($apply->app_status == 'Pending')
                                                               <div class="tpd-badge-item">
                                                                  <span class="tpd-badge info">{{$apply->app_status}}</span>
                                                               </div>
                                                            @else
                                                               <div class="tpd-badge-item">
                                                                  <span class="tpd-badge danger">{{$apply->app_status}}</span>
                                                               </div>
                                                            @endif
                                                         </td>
                                                         <td class="tpd-common-text text-center">
                                                            <a wire:navigate href="{{route('institute.register-edit', $apply->id)}}" class="btn btn-info">
                                                               <svg width="16" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                               </svg>
                                                             </a>
                                                         </td>
                                                      </tr>
                                                   @empty
                                                      <tr>
                                                         <td class="text-center" colspan="5" disabled>Apply List Empty</td>
                                                      </tr>
                                                   @endforelse
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- List-end -->
                     @endif
                 

                  
                 </div>
              </div>
           </div>
        </section>
        <!-- dashboad-content-box-area-end -->

     </main>
</div>


