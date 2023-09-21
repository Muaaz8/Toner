<div>
    <!-- =========== CHECKOUT-SECTION STARTS ==============  -->
    <section>
        <div class="container mb-5">
            <div class="row">
                <div class="text-center mt-5" wire:loading>
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="row" wire:loading.class="invisible">
                <div class="col-md-7">
                    <div class="container p-2 check_out_left">
                        <div class="billing_shipping_main bg-white p-4">
                            <h5 class="mb-3">BILLING DETAILS</h5>
                            <form id="billing-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="name@example.com"
                                                id="first_name" name="first_name" wire:model="first_name"/>
                                            <label htmlFor="first_name">First Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="name@example.com"
                                                id="last_name" name="last_name" wire:model="last_name"/>
                                            <label htmlFor="last_name">Last Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" placeholder="company Name"
                                                id="company" name="company" wire:model="company_name"/>
                                            <label htmlFor="company">Company Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Country"
                                                id="country" name="country" wire:model="country"/>
                                            <label htmlFor="country">Country/Region*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                                placeholder="House number and street name" id="address"
                                                name="address" wire:model="address"/>
                                            <label htmlFor="address">House number and street name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('appartment') is-invalid @enderror" placeholder="appartment"
                                                id="appartment" name="appartment" wire:model="appartment"/>
                                            <label htmlFor="appartment">
                                                Apartment, suite, unit, etc. (optional)*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Town / City"
                                                id="town" name="town" wire:model="city"/>
                                            <label htmlFor="town">
                                                Town / City *
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('state') is-invalid @enderror" placeholder="State / County"
                                                id="state" name="state" wire:model="state"/>
                                            <label htmlFor="state">State / County</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('zip_code') is-invalid @enderror" placeholder="ZIP Code "
                                                id="zip" name="zip"  wire:model="zip_code"/>
                                            <label htmlFor="zip">ZIP Code *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="number"
                                                id="number" name="number" wire:model="phone"/>
                                            <label htmlFor="number">Phone *</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                                                id="email" name="email" wire:model="email"/>
                                            <label htmlFor="email">Email Address *</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" wire:model="notes"></textarea>
                                    <label for="floatingTextarea2" class="text-wrap">Notes about your order, e.g.
                                        special notes for delivery.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 p-0">
                    <div class="check_out_right">
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
                            <button class="ContinueToShipping w-100" type="button" wire:click="submitForm">
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
