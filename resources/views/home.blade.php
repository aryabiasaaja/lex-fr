@extends('layouts.main')

@section('main')
  <div class="owl-carousel-wrapper" style="height: 845px;">
    <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-235px', 'nav': true, 'navVerticalOffset': '70px', 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">

      <div class="position-relative overlay overlay-show overlay-op-9 overflow-hidden pt-4" data-dynamic-height="['845px','845px','845px','750px','750px']" style="height: 845px;">
        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(home.jpg); background-size: cover; background-position: center;"></div>
        <div class="container position-relative z-index-3 pb-5 h-100">
          <div class="row justify-content-center align-items-center pb-5 h-100">
            <div class="col-lg-8 text-center pb-5 mb-5">
              <h1 class="text-color-light font-weight-bold line-height-1 text-12 text-md-14 positive-ls-3 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">LEX F&R ADVOCATES</h1>
              <h2 class="alternative-font-4 text-color-light font-weight-semibold line-height-3 text-5 positive-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1300" data-plugin-options="{'minWindowWidth': 0}"><span class="text-color-primary">Attorneys At Law</span></h2>
              <a href="{{ url('contact-us') }}" class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">CONTACT US</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="owl-carousel-wrapper position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2000" style="margin-top: -222px; height: 470px;">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
      @foreach ($practice_areas as $index => $item)
        <div class="py-5">
          <a href="{{ url('practice-areas/' . Str::slug($item->name)) }}" class="text-decoration-none">
            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
              <div class="card-body text-center px-4 py-5">
                {{-- <img width="60" height="60" src="porto/img/demos/law-firm-2/icons/icon-group.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-2 mb-4 pb-3'}" /> --}}
                <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">{{ $item->name }}</h2>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">{!! Str::limit($item->desc, 200) !!}</p>
                <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                  READ MORE
                  <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

  <div class="container py-5 mt-3">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum."</p>
        <p class="positive-ls-3 text-color-grey mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">FEBRIANTO TARIHORAN - FOUNDER</p>
      </div>
      <div class="col-md-9 col-lg-6 ps-lg-5">
        <div class="position-relative">
          <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
            <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
          </div>
          <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
            <img src="{{ url('uploads/our_partners/febrianto-tarihoran.png') }}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url(porto/img/demos/law-firm-2/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
    <div class="container pt-5 pb-3">
      <div class="row">
        <div class="col text-center">
          <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Our <span class="text-color-primary">Milestones</span></h3>
        </div>
      </div>
      <div class="row counters counters-sm py-5">
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="counter">
            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="50" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
            <label class="text-color-light font-weight-bold text-4 mb-0">Business Year</label>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="counter">
            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="240" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
            <label class="text-color-light font-weight-bold text-4 mb-0">Satiesfied Clients</label>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
          <div class="counter">
            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="2000" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
            <label class="text-color-light font-weight-bold text-4 mb-0">Successfull Cases</label>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="counter">
            <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="20" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
            <label class="text-color-light font-weight-bold text-4 mb-0">Professional Attorneys</label>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(porto/img/demos/law-firm-2/backgrounds/background-2.jpg); background-size: cover; background-position: center;">
    <div class="container py-5 mb-5">
      <div class="row pb-5 mb-4">
        <div class="col text-center">
          <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Our <span class="text-color-primary">Partners</span></h2>
        </div>
      </div>
    </div>
  </section>

  <div class="owl-carousel-wrapper position-relative z-index-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600" style="height: 373px; margin-top: -225px;">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 2}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
      @foreach ($our_partners as $index => $item)
        <div class="py-5">
          <a href="{{ url('our-partners/' . Str::slug($item->name)) }}" class="text-decoration-none">
            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
              <img src="{{ url($item->photo) }}" class="card-img-top border-radius-0" alt="{{ $item->name }} Image" />
              <div class="card-body text-center px-4 py-5">
                <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1 text-uppercase">{{ $item->name }}</h2>
                <p class="text-color-grey positive-ls-3 mb-3 text-capitalize">{{ $item->role }}</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">{!! Str::limit($item->desc, 200) !!}</p>
                <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                  VIEW PROFILE
                  <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </div>
      @endforeach

    </div>
  </div>
@endsection
