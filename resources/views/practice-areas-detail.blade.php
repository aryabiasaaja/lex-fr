@extends('layouts.main')

@section('main')
  <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ url('/') }}/porto/img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
    <div class="container py-4">
      <div class="row">
        <div class="col text-center">
          <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
            <li><a href="{{ url('') }}" class="text-color-primary text-decoration-none">HOME</a></li>
            <li class="text-color-primary active">PRACTICE AREAS</li>
          </ul>
          <h1 class="text-color-light font-weight-bold text-10">Practice Areas</h1>
        </div>
      </div>
    </div>
  </section>

  <div class="spacer py-3 my-4"></div>
  <div class="container">
    <div class="row pb-4">
      <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
        <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4"><em>{{ $area->name }}</em></h2>
        {{-- <p class="font-weight-bold text-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper. </p> --}}
        <p class="pb-3 mb-4">{!! $area->desc !!}</p>
        {{-- <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
          <div class="row pb-3 mb-4">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <a class="d-flex img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 custom-box-shadow-1" href="{{url('/')}}/porto/img/demos/law-firm-2/generic/generic-2-wide.jpg" style="background-image: url({{url('/')}}/porto/img/demos/law-firm-2/generic/generic-2-wide.jpg); background-size: cover; background-position: center; min-height: 300px;"></a>
            </div>
            <div class="col-lg-4 ps-lg-0">
              <a class="d-flex img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 custom-box-shadow-1" href="{{url('/')}}/porto/img/demos/law-firm-2/generic/generic-4-portrait.jpg" style="background-image: url({{url('/')}}/porto/img/demos/law-firm-2/generic/generic-4-portrait.jpg); background-size: cover; background-position: center; min-height: 300px;"></a>
            </div>
          </div>
        </div> --}}
      </div>

      <div class="col-lg-4 position-relative">
        <aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
          <div class="card border-0 border-radius-0 custom-box-shadow-1 px-2 mb-5">
            <div class="card-body p-4 my-3">
              <h3 class="text-transform-none font-weight-bold pb-3 mb-4">Practice Areas</h3>
              <ul class="custom-list-style-1 list list-unstyled font-weight-bold">
                @foreach ($practice_areas as $area)
                  <li class="{{ Request::is('practice-areas/' . Str::slug($area->name)) ? 'active' : '' }}">
                    <a href="{{ url('/practice-areas/' . Str::slug($area->name)) }}" class="text-decoration-none {{ Request::is('practice-areas/' . Str::slug($area->name)) ? 'text-color-primary' : 'text-color-dark text-color-hover-primary' }}">{{ $area->name }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>

        </aside>
      </div>
    </div>
  </div>
  <div class="spacer py-3 my-4"></div>
@endsection
