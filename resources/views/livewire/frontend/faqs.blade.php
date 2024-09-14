<div>
  <!-- faq breadcrumb start -->
  <section class="tp-breadcrumb__area pt-60 pb-20 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg"></div>
    <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12">
              <div class="tp-breadcrumb__content">
                <div class="tp-breadcrumb__list pt-120">
                    <span><a href="{{ url('/') }}" wire:navigate><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                    </svg></a></span>
                    <span>Faq Page</span>
                </div>
                <h3 class="tp-breadcrumb__title white" style="color: #AB0C2F">Frequently Asked Questions</h3>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- faq breadcrumb end -->


  <!-- faq area start -->
  <section class="tp-faq-area tp-faq-p pt-50 pb-120">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="tp-instructor-become-tab">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row">
                          <div class="col-lg-10 mx-auto">
                            <div class="tp-faq-box">
                                <div class="tpd-accordion">
                                  <div class="accordion accordion-flush" id="accordionFlushExample">
                                    
                                    @forelse ($faqs as $faq)
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$faq->id}}" aria-expanded="false" aria-controls="flush-collapseThree">
                                            {{$faq->question}}
                                            <span class="accordion-btn"></span>
                                          </button>
                                        </h2>
                                        <div id="flush-collapse{{$faq->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                          <div class="accordion-body">{!! $faq->answer !!}</div>
                                        </div>
                                      </div>
                                    @empty
                                    <div class="accordion-item">
                                      <p>No data found</p>
                                    </div>
                                    @endforelse
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- instructor area end -->
</div>
