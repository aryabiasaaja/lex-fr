<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lex F&R Advocates</title>

  <meta name="keywords" content="Lex F&R" />
  <meta name="description" content="Lex F&R">
  <meta name="author" content="Lex F&R">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ url('') }}/porto/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="{{ url('') }}/porto/img/apple-touch-icon.png">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link id="googleFonts" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Lora:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" type="text/css">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/animate/animate.compat.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/simple-line-icons/css/simple-line-icons.min.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/owl.carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/vendor/magnific-popup/magnific-popup.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ url('') }}/porto/css/theme.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/css/theme-elements.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/css/theme-blog.css">
  <link rel="stylesheet" href="{{ url('') }}/porto/css/theme-shop.css">

  <!-- Demo CSS -->
  <link rel="stylesheet" href="{{ url('') }}/porto/css/demos/demo-law-firm-2.css">

  <!-- Skin CSS -->
  <link id="skinCSS" rel="stylesheet" href="{{ url('') }}/porto/css/skins/skin-law-firm-2.css">

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{ url('') }}/porto/css/custom.css">

</head>

<body>

  <div class="body">
    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
      <div class="header-body header-body-bottom-border border-top-0">
        <div class="header-top">
          <div class="container">
            <div class="header-row">
              <div class="header-column justify-content-start">
                <div class="header-row">
                  <ul class="list list-unstyled list-inline mb-0">
                    <li class="list-inline-item text-color-dark me-md-4 mb-0">
                      <i class="icons icon-phone text-color-primary text-4 position-relative top-2 me-1"></i>
                      <a href="tel:{{ $phone }}" class="text-color-dark text-color-hover-primary text-decoration-none">
                        <strong>{{ $phone }}</strong>
                      </a>
                    </li>
                    <li class="list-inline-item text-color-dark me-4 mb-0 d-none d-md-inline-block">
                      <i class="icons icon-envelope text-color-primary text-4 position-relative top-4 me-1"></i>
                      <a href="mailto:{{ $email }}" class="text-color-dark text-color-hover-primary text-decoration-none text-2">
                        {{ $email }}
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="header-column justify-content-end">
                <div class="header-row">
                  <ul class="header-social-icons social-icons social-icons-clean d-none d-lg-block">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
                    <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-container container">
          <div class="header-row">
            <div class="header-column">
              <div class="header-row">
                <div class="header-logo">
                  <a href="{{ url('') }}">
                    <img src="{{ url('') }}/images/LOGO-LEX-WT.png" class="img-fluid" width="123" style="background-color: #212529" alt="" />
                  </a>
                </div>
              </div>
            </div>
            <div class="header-column justify-content-end">
              <div class="header-row">
                <div class="header-nav header-nav-links">
                  <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                    <nav class="collapse">
                      <ul class="nav nav-pills" id="mainNav">
                        <li>
                          <a href="{{ url('/') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                          <a href="{{ url('/about-us') }}" class="nav-link {{ request()->routeIs('about-us*') ? 'active' : '' }}">About Us</a>
                        </li>
                        <li>
                          <a href="{{ url('/practice-areas') }}" class="nav-link {{ request()->routeIs('practice-areas*') ? 'active' : '' }}">Practice Areas</a>
                        </li>
                        <li>
                          <a href="{{ url('/our-partners') }}" class="nav-link {{ request()->routeIs('our-partners*') ? 'active' : '' }}">Our Partners</a>
                        </li>
                        <li>
                          <a href="{{ url('/our-clients') }}" class="nav-link {{ request()->routeIs('our-clients*') ? 'active' : '' }}">Our Clients</a>
                        </li>
                        <li>
                          <a href="{{ url('/contact-us') }}" class="nav-link {{ request()->routeIs('contact-us*') ? 'active' : '' }}">Contact Us</a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div role="main" class="main">

      @yield('main')

    </div>

    <footer id="footer" class="border-0 pt-4 mt-0">
      <div class="container py-5">
        <div class="row py-4">
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">About Us</h5>
            <p class="text-3-5">Jakarta-based law firm dedicated to providing full range of corporate legal services in a challenging and dynamic legal environment.<br><br>
              With the team of over 30 high qualified lawyers, mostly with past experiences in their practices, we ensure delivery of high quality legal services to win the best interest of our clients.</p>
            <a href="{{ url('') }}" class="text-decoration-none">
              <img src="{{ url('') }}/images/LOGO-LEX-WT.png" class="img-fluid" alt="" />
            </a>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Menus</h5>
            <ul class="list list-unstyled text-3-5 mb-0">
              <li class="mb-2"><a href="{{ url('') }}">Home</a></li>
              <li class="mb-2"><a href="{{ url('about-us') }}">About Us</a></li>
              <li class="mb-2"><a href="{{ url('practice-areas') }}">Practice Areas</a></li>
              <li class="mb-2"><a href="{{ url('our-partners') }}">Our Partners</a></li>
              <li class="mb-2"><a href="{{ url('our-clients') }}">Our Clients</a></li>
              <li class="mb-0"><a href="{{ url('contact-us') }}">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5 mb-lg-0">
            <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Practice Areas</h5>
            <ul class="list list-unstyled text-3-5 mb-0">
              @foreach ($practice_areas as $item)
                <li class="mb-2"><a href="{{ url('practice-areas/' . Str::slug($item->name)) }}">{{ $item->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-lg-3">
            <h5 class="text-transform-none font-weight-bold text-color-light text-5-5 mb-4">Contact Us</h5>
            <ul class="list list-unstyled mb-4">
              <li>
                <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
                <a href="tel:{{ $phone }}" class="text-color-light font-weight-bold text-decoration-none text-5">{{ $phone }}</a>
              </li>
              <li class="mb-3">
                <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                <a href="mailto:{{ $email }}" class="text-color-light text-decoration-none text-4">{{ $email }}</a>
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
      <div class="footer-copyright py-4">
        <div class="container py-2">
          <div class="row">
            <div class="col">
              <p class="text-center text-3 mb-0">Lex F&R Advocates © {{ Carbon\Carbon::now()->year }}. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="https://wa.me/{{ $phone }}" class="btn btn-primary mb-2 rounded-full position-fixed bottom-15 left-15 p-3" style="border-radius:99999px; z-index:999;">
      <svg fill="#ffffff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308" xml:space="preserve" stroke="#ffffff">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g id="XMLID_468_">
            <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156 c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687 c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887 c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153 c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348 c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802 c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922 c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0 c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458 C233.168,179.508,230.845,178.393,227.904,176.981z"></path>
            <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716 c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396 c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188 l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867 C276.546,215.678,222.799,268.994,156.734,268.994z"></path>
          </g>
        </g>
      </svg>
    </a>

  </div>

  <!-- Vendor -->
  <script src="{{ url('') }}/porto/vendor/plugins/js/plugins.min.js"></script>

  <!-- Theme Base, Components and Settings -->
  <script src="{{ url('') }}/porto/js/theme.js"></script>

  <!-- Current Page Vendor and Views -->
  <script src="{{ url('') }}/porto/js/views/view.contact.js"></script>

  <!-- Demo -->
  <script src="{{ url('') }}/porto/js/demos/demo-law-firm-2.js"></script>

  <!-- Theme Custom -->
  <script src="{{ url('') }}/porto/js/custom.js"></script>

  <!-- Theme Initialization Files -->
  <script src="{{ url('') }}/porto/js/theme.init.js"></script>

</body>

</html>
