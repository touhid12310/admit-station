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
                                                         <label for="pdf">Attach Document</label>
                                                         <input type="file" wire:model="pdf" class="p-2">
                                                      </div>
                                                   </div>
                                                   @error('pdf')
                                                      <div class="m-2 text-danger">{{ $message }}</div>
                                                   @enderror
                                                   <div class="col-lg-12 pt-20" wire:ignore>
                                                      <div class="tpd-input">
                                                         <label for="Description">Description</label>
                                                         <textarea wire:model="description" name="description" placeholder="Institute description for London, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences."></textarea>
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
                                                      </span>
                                                   </button>
                                                   
                                                  
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
                        <div class="row">
                           <div class="col-12">
                              <div class="tp-profile-box">
                                 <div class="tp-dashboard-section">
                                    <h2 class="tp-dashboard-title">Institute Info</h2>
                                 </div>
                                 <div class="tp-profile-wrap">
                                    <ul>
                                       @forelse ($applys as $apply)
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Registration Date</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span>{{ $apply->created_at->format('F j, Y g:i A') }}</span>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Institute Name</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span><a href="">{{$apply->name}}</a></span>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Institute Type</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span><a href="">{{$apply->institute_type}}</a></span>
                                             </div>
                                          </div>
                                       </li>
                                       
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Established Year</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span><a href="">{{$apply->E_year}}</a></span>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Institute Logo</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span>
                                                    @if (!empty($apply->logo))
                                                        <a href="{{asset($apply->logo)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset($apply->logo)}}" alt="" width="10%" height="10%"></a>
                                                    @else
                                                        <p>Image Not Upload</p>
                                                    @endif
                                                </span>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Institute Image</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span>
                                                    @if(!empty($apply->thumb_img))
                                                        <a href="{{asset($apply->thumb_img)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset($apply->thumb_img)}}" alt="" width="30%" height="15%"></a>
                                                    @else
                                                        <p>Image Not Upload</p>
                                                    @endif
                                                </span>
                                             </div>
                                          </div>
                                       </li>
                                       
                                       <li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Institute PDF Doc</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span>
                                                    <a href="{{asset($apply->pdf)}}" target="_blank">
                                                      @if(!empty($apply->pdf))
                                                      <div class="tpd-badge-item">
                                                         <span class="tpd-badge bg-success text-white">View PDF</span>
                                                      </div>
                                                      @else
                                                        <p>PDF Not Upload</p>
                                                      @endif
                                                    </a>
                                                </span>
                                             </div>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Status</span>
                                             </div>
                                             <div class="tp-profile-info-details p-2">
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
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Action</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span class="tpd-badge-item">
                                                   <a wire:navigate href="{{route('institute.register-edit', $apply->id)}}" class="tpd-badge info">
                                                      <svg width="20" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                         <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                      </svg>
                                                   </a>
                                                </span>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="tp-profile-info d-flex">
                                             <div class="tp-profile-info-tag">
                                                <span>Institute Description</span>
                                             </div>
                                             <div class="tp-profile-info-details">
                                                <span>{{ strip_tags($apply->description) }}</span>
                                             </div>
                                          </div>
                                       </li>
                                       @empty

                                       @endforelse
                                    </ul>
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

@push('scripts')
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        setTimeout(() => {
            CKEDITOR.config.versionCheck = false;
            const editor = CKEDITOR.replace('description', {
                filebrowserUploadMethod: 'form',
                filebrowserUploadUrl: '{{ route("ckeditor.upload") }}',
                on: {
                    instanceReady: function(evt) {
                        // Remove sandbox attribute if it exists
                        this.dataProcessor.htmlFilter.addRules({
                            elements: {
                                iframe: function(element) {
                                    delete element.attributes.sandbox;
                                    return element;
                                }
                            }
                        });
                    }
                },
            });
            editor.on('change', function(event){
                @this.description = event.editor.getData();
            });
        }, 700);
    </script>
@endpush

