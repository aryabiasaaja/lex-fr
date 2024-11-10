@extends('layouts.main')

@section('main')
  <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ url('') }}/porto/img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-4">
      <div class="row">
        <div class="col text-center">
          <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
            <li><a href="{{ url('') }}" class="text-color-primary text-decoration-none">HOME</a></li>
            <li class="text-color-primary active">ABOUT US</li>
          </ul>
          <h1 class="text-color-light font-weight-bold text-10">About Us</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="container py-5 my-4">
    <div class="row py-2">
      <div class="col">
        <h2 class="text-color-dark font-weight-bold text-10 mb-4"><em>Lex F&R Advocates</em></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <p class="font-weight-bold line-height-9 text-4 mb-4">Lex F&R Advocates is an Indonesian law firm duly established to provide a full range of legal services for the purpose of guiding its client in a very dynamic and challenging Indonesian legal framework, with the most effective and efficient solution.
        </p>
        <p class="mb-0">Fully supported by capable and experience advocates, enabling Lex F&R Advocates to response every single needs that the client might have.</p>
      </div>
      <div class="col-lg-4">
        <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">Established Expertise with a Strong Team of Partners and Associates</h3>
        <p class="mb-4">Lex F&R Advocates was established in May 2018 and currently comprises of 3 partners and 5 associates, all of which have comprehensive experience representing broad variety of clientele list and type of transaction across the region of Republic of Indonesia.</p>
        <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">Spesializes</h3>
        <p class="mb-0">Lex F&R Advocates specializes in corporate and commercial, capital market, Litigation and alternative dispute resolution, investment, and employment matters, resulting in Lex F&R Advocates becomes a “one stop legal solution” for its local and international client. In doing so, Lex F&R Advoc ates also provide world class quality and cutting-edge innovation of legal services in accordance with international standard for legal services, and therefore, setting itself up as the “problem solver” for its client.</p>
      </div>
      <div class="col-lg-4">
        <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">Your Trusted Navigator for Secure and Successful Transactions</h3>
        <p class="pb-2 mb-4">To its client, Lex F&R Advocates will assume the role as the “navigator”, to ensure safety and certainty of the client transactions. In doing so, Lex F&R Advocates embodies itself to act not only for and on behalf of the client, but to go beyond and act as if Lex F&R Advocates is the client itself.
        </p>
        <ul class="list list-unstyled d-lg-flex d-xl-block align-items-center justify-content-lg-center mb-4">
          <li class="mb-lg-0 mb-xl-3">
            <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
            <a href="tel:{{ $phone }}" class="text-color-dark text-color-hover-primary font-weight-bold text-decoration-none text-5">{{ $phone }}</a>
          </li>
          <li class="mx-lg-5 mx-xl-0 mb-3 mb-lg-0 mb-xl-3">
            <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
            <a href="mailto:{{ $email }}" class="text-color-dark text-color-hover-primary text-decoration-none text-4">{{ $email }}</a>
          </li>
        </ul>
        <ul class="custom-social-icons-style-1 social-icons social-icons-clean">
          <li class="social-icons-instagram">
            <a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="social-icons-twitter mx-4">
            <a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-x-twitter"></i></a>
          </li>
          <li class="social-icons-facebook">
            <a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <hr class="my-0">

  <div class="container py-5 mt-3 mb-4">
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

  <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url({{ url('') }}/porto/img/demos/law-firm-2/backgrounds/background-1.jpg); background-size: cover; background-position: center;">
    <div class="container pt-5 pb-3">
      <div class="row">
        <div class="col text-center">
          <h3 class="alternative-font-4 text-color-primary font-weight-semibold text-7 mb-2">OUR</h3>
          <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Milestones</h3>
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
@endsection
