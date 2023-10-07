<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ Str::ucfirst($view_brand_details) }}</title>
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
    @include('website.header')
    <!-- =========== TOP-BANNER-SECTION STARTS ==============  -->
    <section class="container-fluid products_main_banner">
        <div class="container">
          <div class="banner_content">
            <h5>{{ Str::ucfirst($view_brand_details) }}</h5>
            <div>
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Cartridge</li> -->
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
    <!-- =========== TOP-BANNER-SECTION ENDS ==============  -->


    <!-- =========== ALL-PRODUCTS-SECTION STARTS ==============  -->
    {{-- <section class="py-3">
        <div class="container">
             <div class="row my-3">
              <div class="col-md-3 mb-2">
                <div>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="1">Select printer Type</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select printer Type</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Printer Family</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 mb-2">
                <div>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Select Printer Model</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="row ">
              <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2" >
                <figure class="prod-box">
                  <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
                  <i class= "fa-regular fa-heart wish_list_heart"></i>
                     <div class="badges-wrap">
                   <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
                  <!-- <span class="new_badge">NEW</span> -->
                  <span class="new_badge">FEATURED</span>
                   <!-- <span class="new_badge">10%</span> -->
                </div>
                  <a href="#" >
                    <div class="img-holder">
                      <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-1"
                        alt="product-image"
                      />
                      <img
                          src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-2"
                        alt="product-image2"
                      />
                    </div>
                  </a>


                  <figcaption class="anons">
                    <a
                     href="#"
                    >
                      <h5>
                        BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK        </h5>
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
                        <i
                          class="fa-solid fa-eye eye__Prod mb-2"
                        ></i>
                        <i
                          class="fa-solid fa-arrows-rotate eye__Prod"
                        ></i>
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
              <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2" >
                <figure class="prod-box">
                  <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
                  <i class= "fa-regular fa-heart wish_list_heart"></i>
                     <div class="badges-wrap">
                   <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
                  <!-- <span class="new_badge">NEW</span> -->
                  <span class="new_badge">FEATURED</span>
                   <!-- <span class="new_badge">10%</span> -->
                </div>
                  <a href="#" >
                    <div class="img-holder">
                      <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-1"
                        alt="product-image"
                      />
                      <img
                          src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-2"
                        alt="product-image2"
                      />
                    </div>
                  </a>


                  <figcaption class="anons">
                    <a
                     href="#"
                    >
                      <h5>
                        BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK        </h5>
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
                        <i
                          class="fa-solid fa-eye eye__Prod mb-2"
                        ></i>
                        <i
                          class="fa-solid fa-arrows-rotate eye__Prod"
                        ></i>
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
              <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2" >
                <figure class="prod-box">
                  <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
                  <i class= "fa-regular fa-heart wish_list_heart"></i>
                     <div class="badges-wrap">
                   <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
                  <!-- <span class="new_badge">NEW</span> -->
                  <span class="new_badge">FEATURED</span>
                   <!-- <span class="new_badge">10%</span> -->
                </div>
                  <a href="#" >
                    <div class="img-holder">
                      <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-1"
                        alt="product-image"
                      />
                      <img
                          src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-2"
                        alt="product-image2"
                      />
                    </div>
                  </a>


                  <figcaption class="anons">
                    <a
                     href="#"
                    >
                      <h5>
                        BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK        </h5>
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
                        <i
                          class="fa-solid fa-eye eye__Prod mb-2"
                        ></i>
                        <i
                          class="fa-solid fa-arrows-rotate eye__Prod"
                        ></i>
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
              <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2" >
                <figure class="prod-box">
                  <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
                  <i class= "fa-regular fa-heart wish_list_heart"></i>
                     <div class="badges-wrap">
                   <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
                  <!-- <span class="new_badge">NEW</span> -->
                  <span class="new_badge">FEATURED</span>
                   <!-- <span class="new_badge">10%</span> -->
                </div>
                  <a href="#" >
                    <div class="img-holder">
                      <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-1"
                        alt="product-image"
                      />
                      <img
                          src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                        class="item-img-2"
                        alt="product-image2"
                      />
                    </div>
                  </a>


                  <figcaption class="anons">
                    <a
                     href="#"
                    >
                      <h5>
                        BROTHER TN-450 LASER TONER CARTRIDGE – HIGH YIELD – BLACK        </h5>
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
                        <i
                          class="fa-solid fa-eye eye__Prod mb-2"
                        ></i>
                        <i
                          class="fa-solid fa-arrows-rotate eye__Prod"
                        ></i>
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
          <!-- </div> -->
        </div>
    </section> --}}
    <section class="py-3" style="
        height: 300px;
    ">
        <div class="container">
            <div class="row text-center">
                @forelse ($data as $item)
                <div class="col-md-6 border border-black rounded-2 p-1 mt-2"
                style="width: 48%;
                        margin-right: 5px;
                        margin-left: 5px;
                    ">
                        {{ $item->name }}
                    </div>
                @empty
                    <div class="col-md-12">
                        No Data
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- =========== ALL-PRODUCTS-SECTION ENDS ==============  -->


    <!-- =========== RECOMMENDED-PRODUCTS-SECTION STARTS ==============  -->
    {{-- <section class="container">
        <div class="d-flex justify-content-center mt-5 mb-4">
          <h2>Recommended Products</h2>
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
    </section> --}}
    <!-- =========== RECOMMENDED-PRODUCTS-SECTION ENDS ==============  -->

    @include('website.footer')

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
