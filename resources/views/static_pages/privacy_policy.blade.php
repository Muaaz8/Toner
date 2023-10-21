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

        <section class="py-5 my-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="fs-4">Privacy Policy</h1>
                  </div>
            </div>
        </section>

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


        <!-- =========== FOR MOBILE NAVBAR STARTS ==============  -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">

            <div class="offcanvas-body">
                <div class="">
                    <div class="close_btn_MobNav" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <a class="navbar-brand fw-bold p-0   mb-5" href="#">
                        <img src="https://jew.zishstudio.com/wp-content/themes/elessi-theme/assets/images/logo.jpg"
                            alt="">
                    </a>
                    <div class="filterMain_height">
                        <div>
                            <div class="categories__Main">
                                <ul class="ul_style">
                                    <a href="{{ url('/') }}">
                                        <li>
                                            <p
                                                class="d-flex justify-content-between mb-2 border-top mt-4 mob_naV_linK">
                                                <span class="active_link">Home</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Brands</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Special</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Contact</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Shipping</span>
                                            </p>
                                        </li>
                                    </a>

                                    <!-- agr login hu ---  -->
                                    <!-- <li class="mob_naV_linK">
                          <p
                            class="collapsed d-flex justify-content-between mb-2 "
                            data-bs-toggle="collapse"
                            data-bs-target="#account"
                            aria-expanded="false"
                            aria-controls="account"
                          >
                            <span>My Account</span>
                            <span>
                              <i class="fa-solid fa-plus"></i>
                            </span>
                          </p>
                          <div>
                            <div>
                              <div
                                id="account"
                                class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-heading4"
                              >
                                <ul>
                                  <a href="/orders">
                                    <li >Orders</li>
                                  </a>
                                  <a href="/reset-password">
                                    <li >Reset Password</li>
                                  </a>

                                    <li>
                                      <span onClick={handleLogout}>
                              <i class="fa-solid fa-right-from-bracket"></i>{" "}
                              Logout
                            </span></li>

                                </ul>
                              </div>
                            </div>
                          </div>
                        </li> -->
                                    <!-- agr login hu ---  -->
                                    {{-- @livewire('login-modal') --}}

                                    <li class="mob_naV_linK">
                                        <i class="fa-regular fa-circle-user"></i>
                                        <span data-bs-toggle="modal" data-bs-target="#loginModal">
                                            &nbsp; Login / Register
                                        </span>
                                    </li>

                                </ul>
                            </div>

                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========== FOR MOBILE NAVBAR ENDS ==============  -->
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
