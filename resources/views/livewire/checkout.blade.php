<div>
    <!-- =========== CHECKOUT-SECTION STARTS ==============  -->
    <section>
        <div class="container mb-5">
            <div class="row">
                {{-- <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item coupon_accordian">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed w-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Have a coupon? <span class="fw-medium"> Click here to enter your code </span>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="accordion-body-main">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <div>
                                        <div class="d-flex my-3">
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Coupon Code">
                                            <button class="ContinueToShipping px-2 px-md-4 fw-medium text-nowrap"
                                                type="submit">
                                                Apply Coupon
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> --}}
                <div class="col-md-7">
                    <div class="container p-2 check_out_left">
                        <div class="billing_shipping_main bg-white p-4">
                            <h5 class="mb-3">BILLING DETAILS</h5>
                            <form id="billing-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="name@example.com"
                                                id="first_name" name="first_name" />
                                            <label htmlFor="first_name">First Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="name@example.com"
                                                id="last_name" name="last_name" />
                                            <label htmlFor="last_name">Last Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Company Name"
                                                id="company" name="company" />
                                            <label htmlFor="company">Company Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Floating label select example"
                                                id="country" name="country">

                                                <option selected>United States (US)</option>
                                                <option value="1">Bahrain</option>
                                                <option value="2">Oman</option>
                                                <option value="3">Philipines</option>
                                            </select>
                                            <label htmlFor="country">Country/Region*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="House number and street name" id="address"
                                                name="address" />
                                            <label htmlFor="address">House number and street name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="appartment"
                                                id="appartment" name="appartment" />
                                            <label htmlFor="appartment">
                                                Apartment, suite, unit, etc. (optional)*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Town / City"
                                                id="town" name="town" />
                                            <label htmlFor="town">
                                                Town / City *
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Floating label select example"
                                                id="state" name="state">
                                                <option selected>
                                                    California
                                                </option>
                                                <option value="1">Dubai</option>
                                                <option value="2">Sharjah</option>
                                                <option value="3">Dubai</option>
                                            </select>
                                            <label htmlFor="state">State / County</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="ZIP Code "
                                                id="zip" name="zip" />
                                            <label htmlFor="zip">ZIP Code *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="number"
                                                id="number" name="number" />
                                            <label htmlFor="number">Phone *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" placeholder="name@example.com"
                                                id="email" name="email" />
                                            <label htmlFor="email">Email Address *</label>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3 form-check fw-medium">
                                            <input type="checkbox" class="form-check-input"
                                                id="shipToDifferentAddress" />
                                            <label class="form-check-label" for="shipToDifferentAddress">Ship to a
                                                different
                                                address?</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="shipping-form" style="display: none;">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="name@example.com"
                                                id="first_name" name="first_name" />
                                            <label htmlFor="first_name">First Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="name@example.com"
                                                id="last_name" name="last_name" />
                                            <label htmlFor="last_name">Last Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Company Name"
                                                id="company" name="company" />
                                            <label htmlFor="company">Company Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Floating label select example"
                                                id="country" name="country">

                                                <option selected>United States (US)</option>
                                                <option value="1">Bahrain</option>
                                                <option value="2">Oman</option>
                                                <option value="3">Philipines</option>
                                            </select>
                                            <label htmlFor="country">Country/Region*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="House number and street name" id="address"
                                                name="address" />
                                            <label htmlFor="address">House number and street name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="appartment"
                                                id="appartment" name="appartment" />
                                            <label htmlFor="appartment">
                                                Apartment, suite, unit, etc. (optional)*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="Town / City"
                                                id="town" name="town" />
                                            <label htmlFor="town">
                                                Town / City *
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Floating label select example"
                                                id="state" name="state">
                                                <option selected>
                                                    California
                                                </option>
                                                <option value="1">Dubai</option>
                                                <option value="2">Sharjah</option>
                                                <option value="3">Dubai</option>
                                            </select>
                                            <label htmlFor="state">State / County</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="ZIP Code "
                                                id="zip" name="zip" />
                                            <label htmlFor="zip">ZIP Code *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" placeholder="number"
                                                id="number" name="number" />
                                            <label htmlFor="number">Phone *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" placeholder="name@example.com"
                                                id="email" name="email" />
                                            <label htmlFor="email">Email Address *</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2" class="text-wrap">Notes about your order, e.g.
                                        special notes for delivery.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 p-0">
                    <div class="check_out_right">
                        <!-- {cartItems.length === 0 && <h5>No Items</h5>} -->
                        <h5 class="text-center mb-3">Your Orders</h5>
                        <div class="bg-white px-3 py-4">
                            <div class="d-flex border-bottom justify-content-between">
                                <h6>PRODUCT</h6>
                                <h6>SUBTOTAL</h6>
                            </div>
                            @foreach ($data as $dt)
                                <div class="d-flex align-items-center justify-content-between checoutCart__item">
                                    <div class="d-flex align-items-center position-relative">
                                        <img class="checoutCart__img"
                                        src="{{ $dt->products->images != '[]'?
                                        $dt->products->images[0]->image:'https://jew.zishstudio.com/wp-content/uploads/2023/08/p3.jpg' }}"
                                            alt="Product" />
                                        <div class="item_quantity__check">
                                            {{ $dt->quantity }}
                                        </div>
                                        <p class="ms-2 ">{{ $dt->products->name }}</p>
                                    </div>
                                    <div>
                                        <p class="">
                                            $ {{ $dt->price }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="cart_subtotal_main">
                                <table class="table cart_subtotal">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>
                                            <span class="fw-bold ">
                                                $ {{ $total }}
                                            </span>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <th>Shipping</th>
                                        <td>
                                            <p>
                                                Free shipping
                                            </p>
                                        </td>
                                    </tr> --}}
                                    <!-- {/* <tr>
                            <th>
                              <p class="p-0 working__">
                                UAE ExpectedDelivery 1 – 3 Working Days, (Local
                                Delivery Charges)
                              </p>
                            </th>
                            <td>
                              <span class="fw-bold">AED 0.00</span>
                            </td>
                          </tr> */} -->
                                </table>
                            </div>
                            <div class="total__main px-2">
                                <p>TOTAL</p>
                                <p>
                                    $ {{ $total }}
                                </p>
                            </div>
                        </div>
                        <div class="check_out_right_para pt-3 pb-4">
                            <p>Sorry, it seems that there are no available payment methods for your state. Please
                                contact us if you require assistance or wish to make alternate arrangements.</p>
                            <br>
                            <p>Your personal data will be used to process your order, support your experience throughout
                                this website, and for other purposes described in our <a href=""
                                    class="text-dark"><u>privacy policy.</u> </a></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="ContinueToShipping w-100" type="submit">
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========== CHECKOUT-SECTION ENDS ==============  -->

</div>
