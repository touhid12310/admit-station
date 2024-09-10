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

                        <!-- dashboard-content-area-start -->
                        <div class="tpd-content-layout">
                            <style>
                                .tpd-table {
                                    overflow-x: hidden;
                                }
                            </style>

                            <!-- review-list-start -->
                            <div class="tpd-table mb-25 p-0">
                                <ul>
                                    <li class="tpd-table-head mt-40 ml-20">
                                        <div class="tpd-table-row">
                                            <div class="tpd-reviews-student">
                                                <h4 class="tpd-table-title">Student</h4>
                                            </div>
                                            <div class="tpd-reviews-date">
                                                <h4 class="tpd-table-title">Date</h4>
                                            </div>
                                            <div class="tpd-reviews-feedback">
                                                <h4 class="tpd-table-title">Feedback</h4>
                                            </div>
                                        </div>
                                    </li>

                                    @forelse($reviews as $review)
                                        <li class="ml-20">
                                            <div class="tpd-table-row">
                                                <div class="tpd-reviews-student">
                                                    <div class="tpd-reviews-profile d-flex align-items-center">
                                                        <div class="tpd-reviews-thumb">
                                                            <img src="{{ asset($review->user->photo) }}" alt="">
                                                        </div>
                                                        <h4 class="tpd-reviews-thumb-title">{{ $review->user->name }}
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="tpd-reviews-date" wire:ignore>
                                                    <span>{{ $review->created_at ? $review->created_at->format('F j, Y ') : '' }}</span>
                                                    <p>{{ $review->created_at ? $review->created_at->format('g:i A') : '' }}
                                                    </p>
                                                </div>
                                                <div class="tpd-reviews-feedback">
                                                    <div class="tp-instructor-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span>{{ $review->user->reviews_content }}</span>
                                                    <div class="tpd-course-wrap">
                                                        {{-- <span class="tpd-course-name">Course:</span>
                                          <span class="tpd-course-title">Design Masterclass</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <li class="text-center">No Reviews</li>
                                    @endforelse($reviews as $review)

                                </ul>
                            </div>
                            <!-- review-list-end -->

                            <!-- pagination-area-start -->
                            <div class="tp-dashboard-pagination pt-20">

                            </div>
                            <!-- pagination-area-end -->
                        </div>
                        <!-- dashboard-content-area-end -->

                        <!-- review-Form-start -->
                        <div class="row">
                            <div class="col-12">
                                <form wire:submit.prevent="addReview">
                                    <!-- session msg-->
                                    @include('livewire.partials.flash-msg')
                                    <!-- end session msg-->
                                    <div class="tpd-setting-box pt-120">

                                        <div class="tpd-setting-from p-0">
                                            <div class="row">

                                             <div class="col-lg-12">
                                                <div class="tpd-input">
                                                      <label for="institute">Your Applied Institute</label>
                                                      <select class="form-select" wire:model="institute_id" required>
                                                          <option value="">Select Institute</option>
                                                          @foreach($institutes as $institute)
                                                          <option value="{{ $institute->id }}">{{ $institute->institute->name }}</option>
                                                          @endforeach
                                                      </select>
                                                </div>
                                            </div>

                                                <div class="col-lg-12">
                                                    <div class="tpd-input">
                                                        <label for="Review">
                                                            <h4>Add Review</h4>
                                                        </label>
                                                        <textarea wire:model="reviews_content" placeholder="What's Your Mind"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="tpd-setting-cartificate p-0">
                                            <div class="tpd-setting-cartificate-btn">
                                                <button>
                                                    <span wire:loading.remove>Save</span>
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
                        <!-- review-Form-start -->
                    </div>
                </div>
            </div>
        </section>
        <!-- dashboad-content-box-area-end -->

    </main>
</div>
