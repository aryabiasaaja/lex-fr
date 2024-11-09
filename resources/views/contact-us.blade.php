@extends('layouts.main')

@section('main')
  <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ url('') }}/porto/img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col text-center">
          <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
            <li><a href="{{ url('') }}" class="text-color-primary text-decoration-none">HOME</a></li>
            <li class="text-color-primary active">CONTACT US</li>
          </ul>
          <h1 class="text-color-light font-weight-bold text-12">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="section border-0 py-0 m-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="row py-5 my-5">
            <div class="col-md-6 pb-5">
              <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get In Touch</h2>
              <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Phone</h3>
                <a href="tel:+62811355505" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">+62-811 355 505</a>
              </div>
              <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Email</h3>
                <a href="mailto:advocates@lex-fr.com" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">advocates@lex-fr.com</a>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Address</h2>
              <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Address</h3>
                <p>Jl. Raya Narogong No.88 B KM.5,<br> RT./RW/RW.01/02, Bojong Rawalumbu,<br> Kec. Rawalumbu, Kota Bks, Jawa Barat 17116</p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-5 fluid-col-lg-5 p-0">
          <div class="fluid-col h-100">

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 300px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8635739926444!2d106.98754420803446!3d-6.281659461456478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993a5e3c75a5b%3A0x7544cc9062a62494!2sLex%20F%26R%20Advocates!5e0!3m2!1sid!2sid!4v1731157303592!5m2!1sid!2sid" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
