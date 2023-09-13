<div>

    <!-- =========== PRODUCTS-SECTION STARTS ==============  -->
    <section class="py-5 my-5">
      <div class="container">
          <div class="text-center">
            <h1 class="fs-4">PRODUCTS</h1>
          </div>
           <div class="row my-5">
            <div class="col-md-3 mb-2">
              <div>
                <select class="form-select" aria-label="Default select example" wire:model='selected_brand_id'>
                  <option value="" selected>Select Brand</option>
                  @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div>
                <select class="form-select" aria-label="Default select example" wire:model='selected_type_id' {{ count($types)==0?'disabled':'' }}>
                  <option value="" selected>Select printer Type</option>
                  @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div>
                <select class="form-select" aria-label="Default select example" wire:model='selected_family_id' {{ count($families)==0?'disabled':'' }}>
                  <option value="" selected>Select Printer Family</option>
                  @foreach ($families as $family)
                    <option value="{{ $family->id }}">{{ $family->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div>
                <select class="form-select" aria-label="Default select example" wire:model='selected_model_id' {{ count($models)==0?'disabled':'' }}>
                  <option value="" selected>Select Printer Model</option>
                  @foreach ($models as $model)
                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="text-center mt-5" wire:loading>
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
              </div>
          </div>
          <div class="row" wire:loading.remove>
            @foreach ($products as $item)
                <div class="col-xs-6 col-sm-4 col-6 col-lg-3 hgh mb-2" >
                <figure class="prod-box">
                    <!-- "fa-solid fa-heart heart_active  wish_list_heart" -->
                    {{-- <i class= "fa-regular fa-heart wish_list_heart"></i> --}}
                    <div class="badges-wrap">
                    <!-- <span class="new_badge out_stock_badge">SOLD OUT</span> -->
                    <!-- <span class="new_badge">NEW</span> -->
                    <span class="new_badge">FEATURED</span>
                    <!-- <span class="new_badge">10%</span> -->
                    </div>
                        <a href="#" >
                        <div class="img-holder">
                            @if(count($item->images)>0)
                                <img src="{{ $item->images[0]?env('APP_URL').$item->images[0]->image:'' }}"
                                class="item-img-1"
                                alt="product-image"
                                />
                                <img
                                src="{{ !$item->images[1] ? env('APP_URL').$item->images[0]->image:env('APP_URL').$item->images[1]->image }}"
                                class="item-img-2"
                                alt="product-image2"
                                />
                                {{--  --}}
                            @else
                                <img src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p1.jpg" class="item-img-1"
                                    alt="product-image" />
                                <img
                                src="https://jew.zishstudio.com/wp-content/uploads/2018/02/p2.jpg" class="item-img-2"
                                    alt="product-image2" />
                            @endif
                        </div>
                        </a>
                        <figcaption class="anons">
                        <a href="#"><h5>{{ $item->name }}</h5></a>
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
                        <a class="a_main__">
                        <span class="add_to_cart_span">ADD TO CART</span>
                        <i class="fa-solid fa-bag-shopping shop__bag__pro"></i>
                        </a>
                    </div>
                </figure>
                </div>
            @endforeach
          </div>
          </div>
        <!-- </div> -->
      </div>
    </section>
    <!-- =========== PRODUCTS-SECTION ENDS ==============  -->
</div>
