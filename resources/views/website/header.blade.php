<!-- =========== HEADER Starts ==============  -->
@php
    $logo = App\Models\Tbl_Content::where('slug','logo')->first();
@endphp
<section>
    <header class="bg-light py-2 d-none d-md-flex">
        <div class="container">
            <div class="row">
                <div class="text-end">
                    <span class="me-4"><a href="{{ route('shipping_and_tracking') }}">Shipping</a></span>
                    {{-- <span data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-circle-user me-2"></i>Login / Register</span> --}}
                    @if (Auth::check())
                        <span class="me-4 border p-2 wish_add_cart_btn ">
                            <a href="/dashboard" class="p-2 wish_add_cart_btn ">Go To Dashboard</a>
                        </span>
                        <span class="nav-item dropdown me-3"><i
                                class="fa-regular fa-circle-user me-2"></i>{{ Auth::user()->name }}</span>
                        {{-- <span class="nav-item dropdown me-3"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</span> --}}
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
                                class="fa-regular fa-circle-user me-2"></i>Login
                            / Register</span>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <nav class="d-none d-lg-flex navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                @if ($logo != null)
                    <img src="\{{ $logo->content }}"
                        alt="logo" style="height:50px;">
                @else
                    <img src="https://jew.zishstudio.com/wp-content/uploads/2017/11/logo.png"
                        alt="logo" height="150px">
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('view_brand_details',['view_brand_details'=>'brands']) }}">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('special.products') }}">Special</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact_us') }}">Contact</a>
                    </li>

                </ul>
                <div class="navbar_icons">
                    <ul class="d-flex">
                        <li>
                            <div class="position-relative">
                                    <i class="fa-solid fa-bag-shopping me-3" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRightCart" aria-controls="offcanvasRightCart">
                                    </i>
                                @php
                                use App\Models\Cart;
                                if(Auth::check()){
                                    $count = Cart::where('user_id',auth()->user()->id)->where('status','pending')->count();
                                }else{
                                    if(Cookie::get('shopping_cart')){
                                        $count = count(json_decode(Cookie::get('shopping_cart')));
                                    }else{
                                        $count = 0;
                                    }
                                }
                                @endphp
                                <div id="count" style="
                                    position: absolute;
                                    top: -10px;
                                    right: 28px;
                                    background: #022b49;
                                    border-radius: 50%;
                                    text-align: center;
                                    color: white;
                                    height: 25px;
                                    width: 25px;
                                ">{{ $count }}</div>
                            </div>
                        </li>
                        <li><i class="fa-regular fa-heart me-3" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRightWishlist" aria-controls="offcanvasRightWishlist"></i>
                        </li>
                        <li><i class="fa-solid fa-arrows-rotate me-3"></i></li>
                        <li><i class="fa-solid fa-magnifying-glass me-3" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== for mobile nav starts===== -->
    <nav class="d-flex d-lg-none navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <div class="navbar_icons d-flex align-items-center">

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span>
                    <i class="fa-solid fa-magnifying-glass ms-3" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></i></span>
            </div>
            <a class="navbar-brand fw-bold p-0" href="#">
                <img src="https://jew.zishstudio.com/wp-content/themes/elessi-theme/assets/images/logo.jpg"
                    alt="">
            </a>

            <div class="" id="navbarSupportedContent">

                <div class="navbar_icons">
                    <ul class="d-flex">
                        <li><i class="fa-solid fa-bag-shopping me-3" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRightCart" aria-controls="offcanvasRightCart"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== for mobile nav Ends===== -->

</section>
<!-- =========== HEADER ENDS ==============  -->
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
                                    <a href="{{ route('view_brand_details',['view_brand_details'=>'brands']) }}">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Brands</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="{{ route('special.products') }}">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Special</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="{{ route('contact_us') }}">
                                        <li>
                                            <p class="d-flex justify-content-between mb-2 mob_naV_linK">
                                                <span class="active_link">Contact</span>
                                            </p>
                                        </li>
                                    </a>
                                    <a href="{{ route('shipping_and_tracking') }}">
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
