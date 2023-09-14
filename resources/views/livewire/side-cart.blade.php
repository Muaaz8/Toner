<div>
    <!-- =========== FOR CART TOGGLE STARTS ==============  -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightCart" aria-labelledby="offcanvasRightCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title m-auto" id="offcanvasRightCartLabel">My Cart</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
            <div class="close_btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
        <div class="offcanvas-body">
            <section>
                <div class="container">

                    <div class="">
                        <div class="cart__main_scr">
                            <!-- when cart is empty -->
                            <!-- <div class="text-center mt-5">
                            <i class="fa-solid fa-bag-shopping no_cart_bag"></i>
                            <p class="no_pro__p my-3">No products in the cart.</p>
                            <button class="check_out_btn" onClick={cartOpen}>
                              RETURN TO SHOP
                            </button>
                          </div> -->
                            <!-- when cart is empty -->
                            <!-- ===== when item is present in cart==== -->
                          @foreach ($data as $dt)
                            <div class="cart_data__ mb-3 d-flex justify-content-around">
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/p3.jpg" />
                                <span class="shop_del_item shop__del_two">
                                    <i class="fa-solid fa-xmark"></i>
                                </span>
                                <div>
                                    <p class="ms-2 mb-2">BROTHER TN-450 LASER TONER CARTRIDGE - JUMBO - BLACK</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex">
                                            <div class="cart_quantity">
                                                <a href="#" class="quantity__minus"><span>-</span></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                    value="1">
                                                <a href="#" class="quantity__plus"><span>+</span></a>
                                            </div>
                                            <div class="ms-2" style="font-size: 12px;">
                                                x
                                                <span class="fw-lighter">
                                                    $ 120.00
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ms-3 fw-bold" style="font-size: 12px;">
                                            <span> $ 100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                            <!-- ===== when item is present in cart==== -->

                        </div>
                        <!-- ===== when item is present in cart==== -->

                        <div>
                            <div class="d-flex justify-content-between sub_tot">
                                <p>Subtotal</p>
                                <p>
                                    $ 780.00
                                </p>

                            </div>
                            <a href="/shopping-cart">
                                <button class="view_cart_">VIEW CART</button>
                            </a>
                            <a href="/checkout">

                                <button class="check_out_btn">CHECKOUT</button>
                            </a>
                        </div>
                        <!-- ===== when item is present in cart==== -->

                    </div>
                </div>

            </section>
        </div>
    </div>
    <!-- =========== FOR CART TOGGLE ENDS ==============  -->
</div>
