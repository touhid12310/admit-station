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
                    <div class="row">
                     
                    </div>
                    <!-- dashboard-content-area-start -->
                    <div class="tpd-content-layout">
  
                       <!-- order-area-start -->
                       <section class="tpd-order-area">
                          <div class="row">
                             <div class="col-lg-6">
                                <div class="tp-dashboard-section">
                                   <h2 class="tp-dashboard-title">Application Details</h2>
                                </div>
                             </div>
                          </div>
                          <div class="bg-white p-5 rounded">
                           <table class="table table-hover">
                              <thead>
                                <tr>
                                    <th scope="col"  class="tpd-table-title">Institute Name</th>
                                    <th scope="col"  class="tpd-table-title">Type</th>
                                    <th scope="col"  class="tpd-table-title">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                 @forelse ($applys as $apply)
                                    <tr>
                                       <td class="tpd-common-text">
                                          <a href="{{route('details-institute', $apply->institute->slug)}}" class="{{$apply->status == 'Approved' ? 'text-success' : ($apply->status == 'Pending' ? 'text-warning' : 'text-danger')}}">{{$apply->institute->name}}</a>
                                       </td>
                                       <td class="tpd-common-text">{{$apply->institute->vendors_types}}</td>
                                       <td class="tpd-common-text">
                                          @if ($apply->status == 'Approved')
                                             <div class="tpd-badge-item">
                                                <span class="tpd-badge bg-success text-white">{{$apply->status}}</span>
                                             </div>
                                          @elseif($apply->status == 'Pending')
                                             <div class="tpd-badge-item">
                                                <span class="tpd-badge info">{{$apply->status}}</span>
                                             </div>
                                          @else
                                             <div class="tpd-badge-item">
                                                <span class="tpd-badge danger">{{$apply->status}}</span>
                                             </div>
                                          @endif
                                       </td>
                                    </tr>
                                 @empty
                                    <tr>
                                       <td class="text-center" rowspan="3">Mark</td>
                                    </tr>
                                 @endforelse
                              </tbody>
                            </table>
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
