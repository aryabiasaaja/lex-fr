@extends('layouts.main')

@section('main')
  <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ url('') }}/porto/img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-4">
      <div class="row">
        <div class="col text-center">
          <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
            <li><a href="{{ url('') }}" class="text-color-primary text-decoration-none">HOME</a></li>
            <li class="text-color-primary active">OUR PARTNERS</li>
          </ul>
          <h1 class="text-color-light font-weight-bold text-10">Our Partners</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="spacer py-3 my-4"></div>
  <div class="container">
    <div class="row pb-lg-4">
      <div class="col-lg-4 mb-5 mb-lg-0 position-relative">
        <aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
          <div class="card border-0 border-radius-0 custom-box-shadow-1 mb-5">
            <img src="{{ url($partner->photo) }}" class="card-img-top border-radius-0" alt="{{ $partner->name }} Image" />
            <div class="card-body text-center px-4 py-5">
              <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1 text-uppercase">{{ $partner->name }}</h2>
              <p class="text-color-grey positive-ls-3 mb-3 text-capitalize">{{ $partner->role }}</p>
            </div>
          </div>
        </aside>
      </div>
      <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
        <p class="mb-4">{!! $partner->desc !!}</p>
        <div class="mt-5 text-end">
          <a href="{{ route('our-partners') }}" class="btn btn-primary font-weight-bold btn-px-5 btn-py-2 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" style="animation-delay: 350ms;">Back</a>
        </div>
      </div>
    </div>
  </div>

  <div class="spacer py-3 my-4"></div>
@endsection
