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
                      <a href="tel:+62811355505" class="text-color-dark text-color-hover-primary text-decoration-none">
                        <strong>+62-811 355 505</strong>
                      </a>
                    </li>
                    <li class="list-inline-item text-color-dark me-4 mb-0 d-none d-md-inline-block">
                      <i class="icons icon-envelope text-color-primary text-4 position-relative top-4 me-1"></i>
                      <a href="mailto:advocates@lex-fr.com" class="text-color-dark text-color-hover-primary text-decoration-none text-2">
                        advocates@lex-fr.com
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
                    <img src="{{ url('') }}/LOGO-LEX-WT.png" class="img-fluid" width="123" style="background-color: #212529" alt="" />
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
              <img src="{{ url('') }}/LOGO-LEX-WT.png" class="img-fluid" alt="" />
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
                <a href="tel:+62811355505" class="text-color-light font-weight-bold text-decoration-none text-5">+62-811 355 505</a>
              </li>
              <li class="mb-3">
                <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                <a href="mailto:advocates@lex-fr.com" class="text-color-light text-decoration-none text-4">advocates@lex-fr.com</a>
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
