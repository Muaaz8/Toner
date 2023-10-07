<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        @include('website.header')

        <!-- =========== TOP-BANNER-SECTION STARTS ==============  -->

        <section class="container-fluid products_main_banner">
            <div class="container">
                <div class="banner_content">
                    <h4>Order Received</h4>
                    <div>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== TOP-BANNER-SECTION ENDS ==============  -->

        <!-- =========== ORDER-CONFIRM STARTS ==============  -->

        <section>
            <div class="mt-4 mb-5">
                <div class="container">
                    <div class="main__order_rec">
                        <p class="order_thank_p">
                            Thank you. Your order has been received.
                        </p>
                        <div>
                            <ul class="order__ul_">
                                <li>
                                    <p>Order Number</p>
                                    <p class="orderthank_next">{{ $data->id }}</p>
                                </li>
                                <li>
                                    <p>Date</p>
                                    <p class="orderthank_next">{{ date('Y-m-d',strtotime($data->created_at)) }}</p>
                                </li>
                                <li>
                                    <p>Total</p>
                                    <p class="orderthank_next">$ {{ $data->price }}</p>
                                </li>
                                <li>
                                    <p>Payment Method</p>
                                    <p class="orderthank_next">
                                        COD
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-5">
                            <h3 class="text-center">Order Details</h3>
                            <div class="mt-3">
                                <table class="table table_main_bor">
                                    <tbody>
                                        @forelse ($data->details as $item)
                                            <tr>
                                                <th>
                                                    <p class="order__item_pad">
                                                        {{ $item->products->name }} × {{ $item->quantity }}
                                                    </p>
                                                </th>
                                                <th>
                                                    <p class="order__item_pad order_detail_sec_th">
                                                        $ {{ $item->quantity*$item->product_price }}
                                                    </p>
                                                </th>
                                            </tr>
                                        @empty

                                        @endforelse
                                    </tbody>
                                    <tfoot class="t_foo_bg">
                                        <tr>
                                            <th class="td_border_n">
                                                <p class="order_det_amounts_D pt-2">Subtotal:</p>
                                            </th>
                                            <th class="td_border_n">
                                                <p class="order_detail_sec_th pt-2">$ {{ $data->price }}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="td_border_n">
                                                <p class="order_det_amounts_D">Shipping:</p>
                                            </th>
                                            <th class="td_border_n">
                                                <p class="order_detail_sec_th">

                                                    <span class="via_del_fs">
                                                        Free shipping
                                                    </span>
                                                </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <p class="order_det_amounts_D mb-2">
                                                    Payment method:
                                                </p>
                                            </th>
                                            <th>
                                                <p class="order_detail_sec_th mb-2">
                                                    COD (Credited within 2-3 Working
                                                    Days)
                                                </p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="td_border_n">
                                                <p class="tot_Order_head">TOTAL:</p>
                                            </th>
                                            <th class="td_border_n">
                                                <p class="order_detail_sec_th tot_Order_head total_am_color">
                                                    $ {{ $data->price }}
                                                </p>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/"><button class="btn btn-primary text-center"> Go to Home Page </button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- =========== ORDER-CONFIRM ENDS ==============  -->



        @include('website.footer')


      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
