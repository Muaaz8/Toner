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
        @include('website.header')
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
                    <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/Untitled-1.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/Untitled-1.jpg"
                        class="d-block w-100" alt="...">
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
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'brother']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/brother.webp"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'canon']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/canon.webp" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'epson']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/epson.webp" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'hp']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/hp.webp" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'kyocera']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/kyocera.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'lexmark']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/lexmark.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'minolta']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/minolta.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'okidata']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/okidata.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'panasonic']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/panasonic.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'ricoh']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/ricoh.webp" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'samsung']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/samsung.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'sharp']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/sharp.webp" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'toshiba']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/toshiba.webp"
                                alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div>
                            <a href="{{ route('view_brand_details',['view_brand_details'=>'xerox']) }}">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/xerox.webp" alt="">
                            </a>
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
                                                                <input type="email" class="form-control"
                                                                    id="email" name="email" />

                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="d-flex justify-content-between">
                                                                    <label htmlFor="exampleFormControlInput2"
                                                                        class="form-label">
                                                                        Password <span style="color: red;">*</span>
                                                                    </label>
                                                                </div>
                                                                <input type="password" class="form-control"
                                                                    id="password" name="password" />

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

        @include('website.footer')




        <!-- =========== FOR SEARCH TOGGLE STARTS ==============  -->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header ms-auto">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <section>
                    <div>
                    </div>
                    <div class='search_sub_div'>
                        <input type="email" placeholder="I'm shopping for ..." class="search_input" />
                        <i class="fa-solid fa-magnifying-glass"></i>
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
        <!-- =========== FOR CART TOGGLE STARTS ==============  -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightCart"
            aria-labelledby="offcanvasRightCartLabel">
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
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script>
        // const formSection = document.querySelector('.form-section');
        // const createAccountLink = document.querySelector('.create-account-link');
        // const signInLink = document.querySelector('.sign-in-link');

        // createAccountLink.addEventListener('click', () => {
        //     formSection.classList.add('form-section-move');
        //     createAccountLink.classList.remove('active-link');
        //     signInLink.classList.add('active-link');
        // });

        // signInLink.addEventListener('click', () => {
        //     formSection.classList.remove('form-section-move');
        //     createAccountLink.classList.add('active-link');
        //     signInLink.classList.remove('active-link');
        // });
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
        Livewire.on('side-cart-open', data => {
            var myOffcanvas = document.getElementById('offcanvasRightCart');
            var bsOffcanvas = new bootstrap.Offcanvas(myOffcanvas);
            if (!bsOffcanvas._element.classList.contains('show')) {
                bsOffcanvas.show();
            }
            var count = document.getElementById('count').innerHTML = data;
        });
    </script>
</body>

</html>
