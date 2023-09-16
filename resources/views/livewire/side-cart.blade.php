<div>
    <div class="offcanvas-body">
        <section>
            <div class="container text-center">
                <div wire:loading>
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <br>
                    <span>Loading...</span>
                </div>
            </div>
            <div class="container" wire:loading.remove>
                <div class="">
                    <div class="cart__main_scr">
                        <!-- ===== when item is present in cart==== -->
                        @forelse ($data as $dt)
                            <div class="cart_data__ mb-3 d-flex justify-content-around">
                                {{-- <img src="https://jew.zishstudio.com/wp-content/uploads/2023/08/p3.jpg" /> --}}
                                <img
                                    src="{{ $dt->products->images != '[]' ? $dt->products->images[0]->image : 'https://jew.zishstudio.com/wp-content/uploads/2023/08/p3.jpg' }}" />
                                <span class="shop_del_item shop__del_two" wire:click="remove({{ $dt->id }})">
                                    <i class="fa-solid fa-xmark"></i>
                                </span>
                                <div>
                                    <p class="ms-2 mb-2">{{ $dt->products->name }}</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex">
                                            <div class="cart_quantity">
                                                <a wire:click="decrement({{ $dt->id }})"
                                                    class="quantity__minus"><span>-</span></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                    value="{{ $dt->quantity }}">
                                                <a wire:click="increment({{ $dt->id }})"
                                                    class="quantity__plus"><span>+</span></a>
                                            </div>
                                            {{-- <div class="ms-2" style="font-size: 12px;">
                                                x
                                                <span class="fw-lighter">
                                                    $ 120.00
                                                </span>
                                            </div> --}}
                                        </div>
                                        <div class="ms-3 fw-bold" style="font-size: 12px;">
                                            <span> $ {{ $dt->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <!-- when cart is empty -->
                            <div class="text-center mt-5">
                                <i class="fa-solid fa-bag-shopping no_cart_bag"></i>
                                <p class="no_pro__p my-3">No products in the cart.</p>
                            </div>
                            <!-- when cart is empty -->
                        @endforelse
                        <!-- ===== when item is present in cart==== -->

                    </div>
                    <!-- ===== when item is present in cart==== -->

                    <div>
                        <div class="d-flex justify-content-between sub_tot">
                            <p>Subtotal</p>
                            <p>
                                $ {{ $total }}
                            </p>

                        </div>
                        <a href="{{ url('/shopping_cart') }}">
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
    <!-- =========== FOR CART TOGGLE ENDS ==============  -->
</div>
