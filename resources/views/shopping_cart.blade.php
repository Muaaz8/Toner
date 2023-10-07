<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
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
        <section class="order__steps_mob">
            <div class="container-fluid">
                <div class="px-2 px-md-5">
                    <div class="row">
                        <p class="steps__heading text-center">SHOPPING CART</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="order__steps">
            <div class="container">
                <div class="px-4 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="steps_count__">01</p>
                                </div>
                                <div class="ms-2">
                                    <p class="steps__heading">SHOPPING CART</p>
                                    <p class="steps__subheading">Manage Your Items List</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center {{ Request::path() == "checkout"? "":"order_sub_steps" }}">
                                <div>
                                    <p class="steps_count__">02</p>
                                </div>
                                <div class="ms-2">
                                    <p class="steps__heading">CHECKOUT DETAILS</p>
                                    <p class="steps__subheading">
                                        Checkout Your Items List
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center order_sub_steps">
                                <div>
                                    <p class="steps_count__">03</p>
                                </div>
                                <div class="ms-2">
                                    <p class="steps__heading">ORDER COMPLETE</p>
                                    <p class="steps__subheading">Review Your Order</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== STEPS-SECTION ENDS ==============  -->

        {{ $slot }}
        {{-- @livewire('shopping-cart') --}}



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
                                        <input type="email" name="news-email" id="news-email"
                                            placeholder="Enter your email here">
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
    </main>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
