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

  <div class="container py-5 my-4">
    <div class="row row-gutter-sm py-2">
      @foreach ($our_partners as $index => $item)
        <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="{{ ($index + 1) * 200 }}">
          <a href="{{ url('our-partners/' . Str::slug($item->name)) }}" class="text-decoration-none">
            <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
              <img src="{{ url($item->photo) }}" class="card-img-top border-radius-0" alt="{{ $item->name }} Image" />
              <div class="card-body text-center px-4 py-5">
                <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1 text-uppercase">{{ $item->name }}</h2>
                <p class="text-color-grey positive-ls-3 mb-3">{{ $item->role }}</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">{!! Str::limit($item->desc, 250) !!}</p>
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
