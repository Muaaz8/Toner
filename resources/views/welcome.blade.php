<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              <span class="me-4"><a href="">Shipping</a></span>
              <!-- <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                &nbsp; Login / Register
              </span> -->
              @if (Auth::check())
                  <span class="nav-item dropdown me-3"><i class="fa-regular fa-circle-user me-2"></i>{{ Auth::user()->name }}</span>
                  {{-- <span class="nav-item dropdown me-3"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</span> --}}
                  <span><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true">
                        {{ __('Logout') }}
                    </i></a></span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
              @else
                  <span data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor:pointer;"><i class="fa-regular fa-circle-user me-2"></i>Login / Register</span>
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
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->

            </ul>
            <div class="navbar_icons">
              <ul class="d-flex">
                <li><i class="fa-solid fa-bag-shopping me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightCart" aria-controls="offcanvasRightCart"></i></li>
                <li><i class="fa-regular fa-heart me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightWishlist" aria-controls="offcanvasRightWishlist"></i></li>
                <li><i class="fa-solid fa-arrows-rotate me-3"></i></li>
                <li><i class="fa-solid fa-magnifying-glass me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></i></li>
              </ul>
            </div>
            <!-- <button class="btn btn-outline-dark fw-bold" type="submit">Contact Us</button> -->
          </div>
        </div>
      </nav>
    </section>
    <!-- =========== HEADER ENDS ==============  -->

    <!-- =========== HERO-SECTION STARTS ==============  -->
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button> -->
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/Untitled-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/Untitled-1.jpg" class="d-block w-100" alt="...">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- =========== HERO-SECTION ENDS ==============  -->
    @livewire('home-product')

    <!-- =========== BRANDS-SECTION STARTS ==============  -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/brother.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/canon.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/epson.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/hp.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/kyocera.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/lexmark.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/minolta.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/okidata.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/panasonic.webp" alt="">
            </div>
          </div>
          <div class="col-md-3 col-lg-2">
            <div>
            <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/ricoh.webp" alt="">
            </div>
            </div>
            <div class="col-md-3 col-lg-2">
              <div>
              <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/samsung.webp" alt="">
              </div>
            </div>
            <div class="col-md-3 col-lg-2">
              <div>
              <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/sharp.webp" alt="">
              </div>
            </div>
            <div class="col-md-3 col-lg-2">
              <div>
              <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/toshiba.webp" alt="">
              </div>
            </div>
            <div class="col-md-3 col-lg-2">
              <div>
              <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/xerox.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =========== BRANDS-SECTION ENDS ==============  -->

    <!-- =========== STEPS-SECTION STARTS ==============  -->
    <section class="bg-light steps-wrapper py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="text-center">
              <i class="fa-solid fa-award"></i>
              <h3>Lowest price and lifetime warranty on all products </h3>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="text-center">
              <i class="fa-brands fa-canadian-maple-leaf"></i>
              <h3>Proudly Canadian with warehouses across the country</h3>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="text-center">
              <i class="fa-solid fa-truck-fast"></i>
              <h3>Fast Shipping. Most orders delivered within 24 hrs</h3>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="text-center">
              <i class="fa-regular fa-comments"></i>
              <h3>Superior customer service and free returns</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =========== STEPS-SECTION ENDS ==============  -->
    @livewire('login-modal')
    <div>
        <!-- =========== LOGIN MODAL STARTS ==============  -->
        <div>
            <div>
                <div class="modal fade" id="loginModal" tabIndex="-1" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="w-100 text-center position-relative">
                                    <img src="https://jew.zishstudio.com/wp-content/themes/elessi-theme/assets/images/logo.jpg"
                                        height="45" width="60" alt="" />
                                    <button type="button" class="btn-close modal_close" data-bs-dismiss="modal"
                                        aria-label="Close" id="closeButton"></button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="login__maiN_">
                                    <div class="form-section">
                                        <div class="form-section">
                                            <div class="login-box">
                                                <form method="post" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class=" login__">
                                                        <div class="mb-3">
                                                            <label htmlFor="email" class="form-label">
                                                                Username or email
                                                                <span style="color: red;">*</span>
                                                            </label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" />

                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="d-flex justify-content-between">
                                                                <label htmlFor="exampleFormControlInput2"
                                                                    class="form-label">
                                                                    Password <span style="color: red;">*</span>
                                                                </label>
                                                            </div>
                                                            <input type="password" class="form-control" id="password"
                                                                name="password" />

                                                        </div>
                                                        <button class="sign_blue_btn" type="submit">
                                                            <Spinner color="white" /> SIGN IN TO YOUR ACCOUNT
                                                        </button>
                                                        <div class="text-center mt-3">
                                                            <p>
                                                                Not a member?
                                                                <span>
                                                                    <a href="{{ route('register') }}">Create an
                                                                        account</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========== LOGIN MODAL ENDS ==============  -->
        </div>
    </div>

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




    <!-- =========== FOR SEARCH TOGGLE STARTS ==============  -->
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
      <div class="offcanvas-header ms-auto">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <section>
          <div >
            </div>
            <div class='search_sub_div'>
              <input type="email" placeholder="I'm shopping for ..." class="search_input" />
              <i class="fa-solid fa-magnifying-glass" ></i>
              </div>
            <!-- after type product show ------  -->
              <!-- <div class='search_scrollss'>
              <div class='container'>
                <div class='row'>
                      <div class='col-md-3 col-6 search_div' >
                      <div>
                        <div>
                        <img
                          src=""
                          height={230}
                          width="100%"
                          alt="product-image"
                          style="object-fit: contain;"
                        />
                        </div>

                        <div>
                          <p class='fw-bold'>name</p>
                          <p class='fw-lighter'>price</p>
                        </div>
                      </div>
                      </div>

                </div>
                <div class='text-center my-5'>
                  <button class='search_view_all' >View ALL</button>
                </div>
              </div>
              </div> -->
            <!-- after type product show ------  -->


          </div>
        </section>
      </div>
    </div>
    <!-- =========== FOR SEARCH TOGGLE ENDS ==============  -->

    @livewire('side-cart')



  </main>
  @livewireScripts
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    <script>
  const formSection = document.querySelector('.form-section');
  const createAccountLink = document.querySelector('.create-account-link');
  const signInLink = document.querySelector('.sign-in-link');

  createAccountLink.addEventListener('click', () => {
    formSection.classList.add('form-section-move');
    createAccountLink.classList.remove('active-link');
    signInLink.classList.add('active-link');
  });

  signInLink.addEventListener('click', () => {
    formSection.classList.remove('form-section-move');
    createAccountLink.classList.add('active-link');
    signInLink.classList.remove('active-link');
  });
</script>
<script type="text/javascript">
    var modalForm = new bootstrap.Modal(document.getElementById('loginModal'), {
          keyboard: false
      })

      window.addEventListener('closeModal', event => {
          modalForm.hide()
      });

      window.addEventListener('openModal', event => {
          modalForm.show()
      });

      </script>
</body>

</html>
