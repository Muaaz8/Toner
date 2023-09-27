<div>
    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider">
                            <div class="slider slider-for">
                                @foreach ($data->images as $image)
                                    <div class="slider-banner-image">
                                        <img src="{{ env('APP_URL').$image->image }}"
                                            alt="Car-Image">
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider slider-nav thumb-image">
                                @foreach ($data->images as $image)
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="{{ env('APP_URL').$image->image }}"
                                            alt="slider-img">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h2 class="mt-4">{{ $data->name }}</h2>
                        <h3 class="mt-3">
                            $ 100.00
                        </h3>
                        <div class="product__details_cont pt-3">
                            <p>
                                <span class="pro_det_spa">Brand: </span>
                                <a href="#"> {{ $data->brand->name }}</a>
                            </p>
                            <p class="py-3">{{ Str::limit($data->description,95) }}</p>
                        </div>


                        {{-- <div>
                            <p class="mb-1">
                                Only <span style="color: #1e73be; font-weight: 600;">2</span> item(s) left in stock.
                            </p>
                            <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="height: 5px">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                        </div> --}}

                        <!-- when stock 0 -->
                        <!-- <p style="color: #f76b6a;">Out of stock</p> -->
                        <!-- when stock 0 -->

                        <!-- when stock > 0 -->
                        <div class="add_to_cart_main my-4">
                            <div class="quantity">
                                <input disabled value=1 type="text" />
                                <a class="plus">
                                    +
                                </a>
                                <a class="minus">
                                    -
                                </a>
                            </div>
                            <button class="add_to_cart me-3">
                                ADD TO CART
                            </button>
                            <button class="buy_now">BUY NOW</button>
                        </div>
                        <!-- when stock > 0 -->

                        {{-- <div class="my-3">
                            <div class="size__del flex-wrap">
                                <p class="me-md-5 me-2">
                                    <span class="me-3">
                                        <i class="fa-solid fa-book"></i>
                                    </span>
                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                        Size Guide
                                    </span>
                                </p>
                                <p class="me-md-5 me-2">
                                    <span class="me-3">
                                        <i class="fa-solid fa-rotate-left"></i>
                                    </span>
                                    <span data-bs-toggle="modal" data-bs-target="#delivery_return">
                                        Delivery & Return
                                    </span>
                                </p>
                                <p class="">
                                    <span class="me-3">
                                        <i class="fa-regular fa-circle-question"></i>
                                    </span>
                                    Ask a Question
                                </p>
                            </div>
                            <p class="d-block mt-3"><i class="fa-regular fa-face-smile me-2"></i> <span
                                    class="fw-semibold">40 people</span> are viewing this right now</p>
                        </div> --}}
                        {{-- <div class="text-center border d-flex justify-content-center px-4 py-4 mt-5 position-relative">
                            <h6 class="fw-bold Guaranteed-text">Guaranteed Safe Checkout</h6>
                            <img class="w-75"
                                src="https://jew.zishstudio.com/wp-content/uploads/2020/04/trust-badge.png"
                                alt="">
                        </div> --}}
                        <!-- <div class="d-flex">
                  <p>
                    <i class="fa-solid fa-share-nodes me-2"></i>Share
                  </p>
                  <div class="ms-5">
                    <i class="fa-brands fa-twitter me-4"></i>
                    <i class="fa-brands fa-facebook me-4"></i>
                    <i class="fa-brands fa-pinterest me-4"></i>
                    <i class="fa-regular fa-envelope"></i>
                  </div>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="d-flex justify-content-center">
            <h2 class="m-4">Desbcription</h2>
            <!-- {/* <h2>Reviews (0)</h2> */} -->
        </div>
        <!-- <p class="mb-1 fw-bold">{product.name}</p> -->
        <p class="mb-3 pro__description___">The point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters. On the other hand, we denounce with righteous indignation and dislike men who are
            so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
        <p class="mb-3 pro__description___">It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.</p>
        <div>
            <!-- <iframe
            width="100%"
            height="675"
            src=""
            title="Haji Brand"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowFullScreen
          ></iframe> -->
            <img src="https://jew.zishstudio.com/wp-content/uploads/2017/01/1920x920.jpg" class="w-100"
                alt="">
        </div>
    </section>
    <section class=" container sku_and_categories_main mb-3">
        <div>
            <p>
                <span class="fw-bold">Categories: </span> <span>Cartridge, Knit</span>/
                <span class="fw-bold">Tags:</span> <span>Coats,Knit,trending</span>

            </p>
        </div>
    </section>
</div>