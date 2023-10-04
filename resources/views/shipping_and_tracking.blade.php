<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shipping And Tracking</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireStyles
</head>

<body>
  <main>
    <!-- =========== HEADER Starts ==============  -->

    <section>

      <header class="bg-light py-2">
        <div class="container">
          <div class="row">
            <div class="text-end">
              <span class="me-4"><a href="/shipping_and_tracking">Shipping</a></span>
                @if (Auth::check())
                    <span class="nav-item dropdown me-3"><i
                            class="fa-regular fa-circle-user me-2"></i>{{ Auth::user()->name }}</span>
                    <span><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                class="fa fa-sign-out" aria-hidden="true">
                                {{ __('Logout') }}
                            </i></a></span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <span data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor:pointer;"><i
                            class="fa-regular fa-circle-user me-2"></i>Login / Register</span>
                @endif
            </div>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">
            <img src="https://jew.zishstudio.com/wp-content/themes/elessi-theme/assets/images/logo.jpg"  alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Brands</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Special</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <div class="navbar_icons">
              <ul class="d-flex">
                <li><i class="fa-solid fa-bag-shopping me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightCart" aria-controls="offcanvasRightCart"></i></li>
                {{-- <li><i class="fa-regular fa-heart me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightWishlist" aria-controls="offcanvasRightWishlist"></i></li>
                <li><i class="fa-solid fa-arrows-rotate me-3"></i></li>
                <li><i class="fa-solid fa-magnifying-glass me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></i></li> --}}
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <!-- =========== HEADER ENDS ==============  -->


    <!-- =========== TOP-BANNER-SECTION STARTS ==============  -->
    <section class="container-fluid products_main_banner">
        <div class="container">
          <div class="banner_content">
            <h5>Shipping and Tracking</h5>
            <div>
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
    <!-- =========== TOP-BANNER-SECTION ENDS ==============  -->


    <!-- =========== ALL-PRODUCTS-SECTION STARTS ==============  -->
    @livewire('tracking')
    <!-- =========== ALL-PRODUCTS-SECTION ENDS ==============  -->


    <!-- =========== RECOMMENDED-PRODUCTS-SECTION STARTS ==============  -->
    <!-- =========== RECOMMENDED-PRODUCTS-SECTION ENDS ==============  -->

    <!-- =========== FOOTER STARTS ==============  -->
    <footer class="footer-section">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="widget company-intro-widget">
                <a href="index.html" class="site-logo">
                  <img src="https://jew.zishstudio.com/wp-content/uploads/2017/11/logo.png"
                    alt="logo">
                  </a>
                <p>Calista Wise 7292 Dictum Av. Antonio, Italy.</p>
                <p>(+01)-800-3456-88</p>
                <ul class="company-footer-contact-list">
                  <li></i>admin@mail.com</li>
                  <li></i>yourdomain.com</li>
                </ul>
              </div>
            </div><!-- widget end -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="widget course-links-widget">
                <h5 class="widget-title">Information</h5>
                <ul class="courses-link-list">
                  <li><a href="#">Delivery Information</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Condition</a></li>
                  <li><a href="#">Search Terms</a></li>
                  <li><a href="#">Order & Return</a></li>
                </ul>
              </div>
            </div><!-- widget end -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="widget latest-news-widget">
                <h5 class="widget-title">Need help</h5>
                <ul class="courses-link-list">
                  <li><a href="#">Customer Service</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms & Condition</a></li>
                  <li><a href="#">Best Seller</a></li>
                  <li><a href="#">Manufactures</a></li>
                </ul>
              </div>
            </div><!-- widget end -->
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="widget newsletter-widget">
                <h5 class="widget-title">Newsletter</h5>
                <div class="footer-newsletter">
                  <p>Get instant updates about our new products and special promos!</p>
                  <form class="news-letter-form">
                    <input type="email" name="news-email" id="news-email" placeholder="Enter your email here">
                    <input type="submit" value="Subscribe">
                  </form>
                </div>
              </div>
            </div><!-- widget end -->
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 text-sm-left">
              <span class="copy-right-text">© 2023 – All Right reserved!</span>
            </div>
            <div class="col-md-8 col-sm-6">
              <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center flex-wrap">
                <li><a href="#">Privacy & Cookies</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Accessibility</a></li>
                <li><a href="#">Store Directory</a></li>
                <li><a href="#">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- footer-bottom end -->
    </footer>

    <!-- =========== FOOTER ENDS ==============  -->
    <!-- =========== FOR CART TOGGLE STARTS ==============  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightCart" aria-labelledby="offcanvasRightCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title m-auto" id="offcanvasRightCartLabel">My Cart</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            <div class="close_btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
            @livewire('side-cart')
    </div>



  </main>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js">	</script>
    <script>
        $('.autoplay').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows : false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows : false,
      }
    }
  ]
}

);
    </script>
</body>

</html>
