<div>

    <!-- if item present in cart ==== -->
    @if ($data)
        <section class="cart__super_main">
            <div class="container-lg container-fluid">
                <div class="">
                    <div class="row">
                        <div class="col-md-8 text-center">
                            <div wire:loading>
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <br>
                                <span>Loading...</span>
                            </div>
                        </div>
                        <div class="col-md-8" wire:loading.remove>
                            <div class="table-responsive">
                                <table class="table custom__table_style">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="3">PRODUCT</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">QUANTITY</th>
                                            <th scope="col">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $dt)
                                            <tr>
                                                <td>
                                                    <span class="shop_del_item" wire:click="remove({{ $dt->id }})">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </span>
                                                </td>
                                                <td>
                                                    <img src="{{ $dt->products->images != '[]'
                                                        ? $dt->products->images[0]->image
                                                        : 'https://jew.zishstudio.com/wp-content/uploads/2023/08/p3.jpg' }}"
                                                        class="" alt="" height="80" width="60" />
                                                </td>
                                                <td>
                                                    <p style="width: 150px;">{{ $dt->products->name }}</p>
                                                </td>
                                                <td>
                                                    $ {{ $dt->price }}
                                                </td>
                                                <td>
                                                    <div class="quantity">
                                                        <input disabled value={{ $dt->quantity }} type="text" />
                                                        <a class="plus" wire:click="increment({{ $dt->id }})">
                                                            +
                                                        </a>
                                                        <a class="minus" wire:click="decrement({{ $dt->id }})">
                                                            -
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="shopp_total_amount">
                                                        $ {{ $dt->quantity * $dt->price }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="cart__totals">
                                <h5 class="cart_tota_heading">CART TOTALS</h5>
                                <div class="d-flex justify-content-between sub_tot_maIn">
                                    <p>Subtotal</p>
                                    <p wire:loading.remove>
                                        $ {{ $total }}
                                    </p>
                                </div>
                                {{-- <div class=" sub_tot_maIn align-items-baseline">
                                    <div class="d-flex justify-content-between ">
                                        <p>Shipping</p>
                                        <p class="delivery__content">
                                            Free shipping
                                    </div>
                                    <p class="delivery__content mt-2">
                                        Shipping to
                                        <span class="fw-bold">CA</span>
                                    </p>
                                    <div>
                                        <div>
                                            <div class="" id="accordionExample">
                                                <div class="accordion-item">
                                                    <div class="change_address_head text-end" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        Change Address
                                                    </div>

                                                    <div id="collapseOne" class="accordion-collapse collapse "
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="w-75 ms-auto">
                                                                <div class="form-floating mb-2">
                                                                    <select class="form-select" id="floatingSelect"
                                                                        aria-label="Floating label select example">
                                                                        <option selected>United States (US)</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <label for="floatingSelect">Country/ region</label>
                                                                </div>
                                                                <div class="form-floating mb-2">
                                                                    <select class="form-select" id="floatingSelect"
                                                                        aria-label="Floating label select example">
                                                                        <option selected>California</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                    <label for="floatingSelect">State</label>
                                                                </div>
                                                                <input type="text" class="form-control mb-2"
                                                                    placeholder="City*" />
                                                                <input type="text" class="form-control mb-2"
                                                                    placeholder="Postal / Zipcode*" />
                                                                <button class="change__address_btn">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div> --}}
                                <div class="d-flex justify-content-between align-items-baseline tot_maIn">
                                    <h5>Total</h5>
                                    <h4 class="tot__amOunt" wire:loading.remove>
                                        $ {{ $total }}
                                    </h4>
                                </div>
                                <div>
                                    <button class="proceed_to_cheCK">
                                        Proceed to checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- if item present in cart ==== -->

    <!-- if item not present in cart ==== -->
    @else
        <div class="text-center mt-5 mb-4">
            <i class="fa-solid fa-bag-shopping no_cart_bag"></i>
            <p class="no_pro__pp my-3">Your cart is currently empty.</p>
            <p class="my-2">
                Before proceed to checkout you must add some products to shopping
                cart.<br />
                You will find a lot of interesting products on our "Shop"
                page.
            </p>
            <a href="{{ url('/') }}"><button class="return_to_Shop">RETURN TO SHOP</button></a>
        </div>
    @endif
    <!-- if item not present in cart ==== -->
    <!-- =========== SHOPPING CART-SECTION ENDS ==============  -->

</div>
