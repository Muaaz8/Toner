 <!-- =========== HEADER Starts ==============  -->

 <section>

    <header class="bg-light py-2">
      <div class="container">
        <div class="row">
          <div class="text-end">
            <span class="me-4"><a href="/shipping_and_tracking">Shipping</a></span>
            <!-- <span data-bs-toggle="modal" data-bs-target="#exampleModal">
              &nbsp; Login / Register
            </span> -->
            @if (Auth::check())
                <span class="me-4 border p-2 wish_add_cart_btn ">
                  <a href="/dashboard" class="p-2 wish_add_cart_btn ">Go To Dashboard</a>
              </span>
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
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
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
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
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
              {{-- <li><i class="fa-regular fa-heart me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightWishlist" aria-controls="offcanvasRightWishlist"></i></li>
              <li><i class="fa-solid fa-arrows-rotate me-3"></i></li>
              <li><i class="fa-solid fa-magnifying-glass me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></i></li> --}}
            </ul>
          </div>
          <!-- <button class="btn btn-outline-dark fw-bold" type="submit">Contact Us</button> -->
        </div>
      </div>
    </nav>
  </section>
  <!-- =========== HEADER ENDS ==============  -->
