<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
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
            <h5>Contact Us</h5>
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
    <div>
        <div class="mt-3">
            <h2 class="text-center" style="background-color: #1e73be;
            border-color: #1e73be;
            color: #fff;
            border-width: 1px;
            border-style: solid;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
            padding: 7px 50px;
            font-size: 12px;
            transition: 0.3s;">Contact us</h2>
        </div>
        <div class="main__order_rec p-4">
            <p class="text-danger fs-6">BEFORE SUBMITTING THE FORM BELOW PLEASE CHECK THE ORDER STATUS IN YOUR</p>

            <p>TOLL FREE: 1-888-609-6095</p>

            <p>MONTREAL: (514) 312-8281</p>

            <p>TORONTO: (416) 619-4629</p>

            <p>VANCOUVER: (604) 484-8963</p>

            <p>HALIFAX: (902) 482-1156</p>

            <p>EDMONTON: (780) 665-4752</p>

            <p>CALGARY: (403) 770-1587</p>
        </div>
        <div class="d-flex justify-content-center">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="d-flex justify-content-center p-4">
            <form action="{{ route('contact_us.post') }}" method="POST" style="width:50%">
                    @csrf
                    <label for="first_name"><strong>First Name*</strong></label>
                    <input type="text" name="first_name" class="form-control mb-3">

                    <label for="email"><strong>Email Address*</strong></label>
                    <input type="text" name="email" class="form-control mb-3">


                    <label for="message"><strong>Message</strong></label>
                    <textarea class="form-control mb-3" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>

                    <p class="text-center p-4"><button class="btn btn-primary">Submit</button></p>
            </form>
        </div>
    </div>

    <!-- =========== ALL-PRODUCTS-SECTION ENDS ==============  -->

    @livewire('login-modal')

    <!-- =========== RECOMMENDED-PRODUCTS-SECTION STARTS ==============  -->
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
