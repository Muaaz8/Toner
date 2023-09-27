<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Detail</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
              <span data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                  class="fa-regular fa-circle-user me-2"></i>Login / Register</span>
            </div>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">
            <img src="https://jew.zishstudio.com/wp-content/themes/elessi-theme/assets/images/logo.jpg" alt="">
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
                <li><i class="fa-solid fa-bag-shopping me-3" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRightCart" aria-controls="offcanvasRightCart"></i></li>
                <li><i class="fa-regular fa-heart me-3" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRightWishlist" aria-controls="offcanvasRightWishlist"></i></li>
                <li><i class="fa-solid fa-arrows-rotate me-3"></i></li>
                <li><i class="fa-solid fa-magnifying-glass me-3" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></i></li>
              </ul>
            </div>
            <!-- <button class="btn btn-outline-dark fw-bold" type="submit">Contact Us</button> -->
          </div>
        </div>
      </nav>
    </section>
    <!-- =========== HEADER ENDS ==============  -->

    <!-- <section class="banner-section">
      <div class="container">
          <div class="vehicle-detail-banner banner-content clearfix">
              <div class="banner-slider">
                  <div class="slider slider-for">
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car-Image">
                      </div>
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Car-Image">
                      </div>
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="Car-Image">
                      </div>
                       <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car-Image">
                      </div>
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Car-Image">
                      </div>
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="Car-Image">
                      </div>
                       <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car-Image">
                      </div>
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Car-Image">
                      </div>
                      <div class="slider-banner-image">
                          <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="Car-Image">
                      </div>
                  </div>
                  <div class="slider slider-nav thumb-image">
                      <div class="thumbnail-image">
                          <div class="thumbImg">
                              <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="slider-img">
                          </div>
                      </div>
                      <div class="thumbnail-image">
                          <div class="thumbImg">
                              <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="slider-img">
                          </div>
                      </div>
                      <div class="thumbnail-image">
                          <div class="thumbImg">
                              <img src="https://images.unsplash.com/photo-1564376130023-5360fbb7c91b?ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80" alt="slider-img">
                          </div>
                      </div>
                        <div class="thumbnail-image">
                          <div class="thumbImg">
                              <img src="https://images.unsplash.com/photo-1570942872213-1242607a35eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="slider-img">
                          </div>
                      </div>
                      <div class="thumbnail-image">
                          <div class="thumbImg">
                              <img src="https://images.unsplash.com/photo-1570171278960-d6c2b316f3b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="slider-img">
                          </div>


                  </div>
              </div>
          </div>
      </div>
  </section> -->
  <!-- End User this HTML for Slider -->

    {{-- <section class="container-fluid products_main_banner">
      <div class="container">
        <div class="banner_content">
          <h5>BROTHER TN-450 LASER TONER CARTRIDGE – JUMBO – BLACK</h5>
          <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cartridge</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section> --}}
    @livewire('product-details',compact('id'))

  </main>

    <!-- =========== RECOMMENDED-PRODUCTS-SECTION STARTS ==============  -->
    <section class="container">
      <div class="d-flex justify-content-center mt-5 mb-4">
        <h2>Related Products</h2>
      </div>
      <div class="row">
        <!-- === products.length === 0 === -->
        <!-- <h4 class="py-5 text-center">No Related Product Found</h4> -->
        <!-- === products.length === 0 === -->
        <div class="autoplay">

        <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
          <figure class="prod-box">
            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
            <i class="fa-regular fa-heart wish_list_heart"></i>
            <div class="badges-wrap">
              <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
              <!-- <span class="new_badge">NEW</span> -->
              <span class="new_badge">FEATURED</span>
              <!-- <span class="new_badge">10%</span> -->
            </div>
            <a href="#">
              <div class="img-holder">
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                  alt="product-image" />
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-2"
                  alt="product-image2" />
              </div>
            </a>


            <figcaption class="anons">
              <a href="#">
                <h5>
                  BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK </h5>
              </a>

              <p>
                <!-- <del class="me-3">
                        $1232123
                      </del> -->
                $45.00
              </p>
            </figcaption>

            <div class="eye_compare">
              <div>
                <div>
                  <i class="fa-solid fa-eye eye__Prod mb-2"></i>
                  <i class="fa-solid fa-arrows-rotate eye__Prod"></i>
                </div>
              </div>
            </div>
            <div class="cart__">
              <a class="a_main__">
                <span class="add_to_cart_span">ADD TO CART</span>
                <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
          <figure class="prod-box">
            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
            <i class="fa-regular fa-heart wish_list_heart"></i>
            <div class="badges-wrap">
              <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
              <!-- <span class="new_badge">NEW</span> -->
              <span class="new_badge">FEATURED</span>
              <!-- <span class="new_badge">10%</span> -->
            </div>
            <a href="#">
              <div class="img-holder">
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                  alt="product-image" />
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-2"
                  alt="product-image2" />
              </div>
            </a>


            <figcaption class="anons">
              <a href="#">
                <h5>
                  BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK </h5>
              </a>

              <p>
                <!-- <del class="me-3">
                        $1232123
                      </del> -->
                $45.00
              </p>
            </figcaption>

            <div class="eye_compare">
              <div>
                <div>
                  <i class="fa-solid fa-eye eye__Prod mb-2"></i>
                  <i class="fa-solid fa-arrows-rotate eye__Prod"></i>
                </div>
              </div>
            </div>
            <div class="cart__">
              <a class="a_main__">
                <span class="add_to_cart_span">ADD TO CART</span>
                <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
          <figure class="prod-box">
            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
            <i class="fa-regular fa-heart wish_list_heart"></i>
            <div class="badges-wrap">
              <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
              <!-- <span class="new_badge">NEW</span> -->
              <span class="new_badge">FEATURED</span>
              <!-- <span class="new_badge">10%</span> -->
            </div>
            <a href="#">
              <div class="img-holder">
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                  alt="product-image" />
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-2"
                  alt="product-image2" />
              </div>
            </a>


            <figcaption class="anons">
              <a href="#">
                <h5>
                  BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK </h5>
              </a>

              <p>
                <!-- <del class="me-3">
                        $1232123
                      </del> -->
                $45.00
              </p>
            </figcaption>

            <div class="eye_compare">
              <div>
                <div>
                  <i class="fa-solid fa-eye eye__Prod mb-2"></i>
                  <i class="fa-solid fa-arrows-rotate eye__Prod"></i>
                </div>
              </div>
            </div>
            <div class="cart__">
              <a class="a_main__">
                <span class="add_to_cart_span">ADD TO CART</span>
                <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
          <figure class="prod-box">
            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
            <i class="fa-regular fa-heart wish_list_heart"></i>
            <div class="badges-wrap">
              <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
              <!-- <span class="new_badge">NEW</span> -->
              <span class="new_badge">FEATURED</span>
              <!-- <span class="new_badge">10%</span> -->
            </div>
            <a href="#">
              <div class="img-holder">
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                  alt="product-image" />
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-2"
                  alt="product-image2" />
              </div>
            </a>


            <figcaption class="anons">
              <a href="#">
                <h5>
                  BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK </h5>
              </a>

              <p>
                <!-- <del class="me-3">
                        $1232123
                      </del> -->
                $45.00
              </p>
            </figcaption>

            <div class="eye_compare">
              <div>
                <div>
                  <i class="fa-solid fa-eye eye__Prod mb-2"></i>
                  <i class="fa-solid fa-arrows-rotate eye__Prod"></i>
                </div>
              </div>
            </div>
            <div class="cart__">
              <a class="a_main__">
                <span class="add_to_cart_span">ADD TO CART</span>
                <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
          <figure class="prod-box">
            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
            <i class="fa-regular fa-heart wish_list_heart"></i>
            <div class="badges-wrap">
              <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
              <!-- <span class="new_badge">NEW</span> -->
              <span class="new_badge">FEATURED</span>
              <!-- <span class="new_badge">10%</span> -->
            </div>
            <a href="#">
              <div class="img-holder">
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                  alt="product-image" />
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-2"
                  alt="product-image2" />
              </div>
            </a>


            <figcaption class="anons">
              <a href="#">
                <h5>
                  BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK </h5>
              </a>

              <p>
                <!-- <del class="me-3">
                        $1232123
                      </del> -->
                $45.00
              </p>
            </figcaption>

            <div class="eye_compare">
              <div>
                <div>
                  <i class="fa-solid fa-eye eye__Prod mb-2"></i>
                  <i class="fa-solid fa-arrows-rotate eye__Prod"></i>
                </div>
              </div>
            </div>
            <div class="cart__">
              <a class="a_main__">
                <span class="add_to_cart_span">ADD TO CART</span>
                <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
          <figure class="prod-box">
            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
            <i class="fa-regular fa-heart wish_list_heart"></i>
            <div class="badges-wrap">
              <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
              <!-- <span class="new_badge">NEW</span> -->
              <span class="new_badge">FEATURED</span>
              <!-- <span class="new_badge">10%</span> -->
            </div>
            <a href="#">
              <div class="img-holder">
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                  alt="product-image" />
                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-2"
                  alt="product-image2" />
              </div>
            </a>


            <figcaption class="anons">
              <a href="#">
                <h5>
                  BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK </h5>
              </a>

              <p>
                <!-- <del class="me-3">
                        $1232123
                      </del> -->
                $45.00
              </p>
            </figcaption>

            <div class="eye_compare">
              <div>
                <div>
                  <i class="fa-solid fa-eye eye__Prod mb-2"></i>
                  <i class="fa-solid fa-arrows-rotate eye__Prod"></i>
                </div>
              </div>
            </div>
            <div class="cart__">
              <a class="a_main__">
                <span class="add_to_cart_span">ADD TO CART</span>
                <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
              </a>
            </div>
          </figure>
        </div>
        </div>
      </div>
    </section>
  <!-- =========== RECOMMENDED-PRODUCTS-SECTION ENDS ==============  -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>

    <script>
      $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical:true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:true,
    responsive: [
    {
        breakpoint: 992,
        settings: {
          vertical: false,
        }
    },
    {
      breakpoint: 768,
      settings: {
        vertical: false,
      }
    },
    {
      breakpoint: 580,
      settings: {
        vertical: false,
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 380,
      settings: {
        vertical: false,
        slidesToShow: 2,
      }
    }
    ]
});
    </script>
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
