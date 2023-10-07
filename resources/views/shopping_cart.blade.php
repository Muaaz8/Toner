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



        @include('website.footer')

    </main>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
