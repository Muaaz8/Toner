<div>

    <!-- =========== PRODUCTS-SECTION STARTS ==============  -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center">
                <h1 class="fs-4">PRODUCTS</h1>
            </div>
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2">
                        <figure class="prod-box">
                            <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
                            {{-- <i class= "fa-regular fa-heart wish_list_heart"></i> --}}
                            <div class="badges-wrap">
                                @if ($item->stocks == 0)
                                    <span class="new_badge out_stock_badge">SOLD OUT</span>
                                @endif
                                @if ($item->created_at > \Carbon\Carbon::now()->subDays(5))
                                    <span class="new_badge">NEW</span>
                                @endif
                                <span class="new_badge">FEATURED</span>
                                <!-- <span class="new_badge">10%</span> -->
                            </div>
                            <a href="{{ route('product_detail', ['id' => $item->id]) }}">
                                <div class="img-holder" style="height: 27em;">
                                    @if (count($item->images) > 0)
                                        <img src="{{ $item->images[0] ? env('APP_URL') . $item->images[0]->image : '' }}"
                                            class="item-img-1" alt="product-image" />
                                        <img src="{{ !isset($item->images[1]) ? env('APP_URL') . $item->images[0]->image : env('APP_URL') . $item->images[1]->image }}"
                                            class="item-img-2" alt="product-image2" />
                                    @else
                                        <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg"
                                            class="item-img-1" alt="product-image" />
                                        <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p2.jpg"
                                            class="item-img-2" alt="product-image2" />
                                    @endif
                                </div>
                            </a>
                            <figcaption class="anons">
                                <a href="#">
                                    <h5>{{ $item->name }}</h5>
                                </a>
                                <p>
                                    <!-- <del class="me-3">
                                    $1232123
                                </del> -->
                                    ${{ $item->price }}
                                </p>
                            </figcaption>
                            <div class="eye_compare">
                                <div>
                                    <div>
                                        {{-- <i class="fa-solid fa-eye eye__Prod mb-2"></i> --}}
                                        {{-- <i class="fa-solid fa-arrows-rotate eye__Prod"></i> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="cart__">
                                @if ($item->stocks != 0)
                                    <a class="a_main__" wire:click="add_to_cart({{ $item->id }})">
                                        <span class="add_to_cart_span">ADD TO CART</span>
                                        <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
                                    </a>
                                @else
                                    <a class="a_main__">
                                        <span class="add_to_cart_span">Out Of Stock</span>
                                        <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
                                    </a>
                                @endif
                            </div>
                        </figure>
                    </div>
                @endforeach
                @if (Request::path() != 'all_product')
                    <div class="text-center">
                        <a href="{{ route('all_products') }}"><button class="btn btn-primary"> View All</button></a>
                    </div>
                @endif
            </div>
        </div>
        <!-- </div> -->
</div>
</section>
<!-- =========== PRODUCTS-SECTION ENDS ==============  -->
</div>
