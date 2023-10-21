@extends('layouts.admin')

@section('title')
    Edit Product
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Edit Product</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('products.post_update',$product->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="name"
                                            placeholder="Dell" value="{{ $product->name }}" required/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Family</label>
                                    <div class="col-sm-10">
                                        <select id="country" class="select2 form-select" name="family_id" required>
                                            <option value="">Select</option>
                                            @foreach ($families as $family)
                                                @if ($family->id == $product->family_id)
                                                    <option value="{{ $family->id }}" selected>{{ $family->name }}</option>
                                                @else
                                                    <option value="{{ $family->id }}">{{ $family->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Type</label>
                                    <div class="col-sm-10">
                                        <select id="country" class="select2 form-select" name="type_id" required>
                                            <option value="">Select</option>
                                            @foreach ($types as $type)
                                                @if ($type->id == $product->type_id)
                                                    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                                                @else
                                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Brands</label>
                                    <div class="col-sm-10">
                                        <select id="country" class="select2 form-select" name="brand_id" required>
                                            <option value="">Select</option>
                                            @foreach ($brands as $brand)
                                                @if ($brand->id == $product->brand_id)
                                                    <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                @else
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Models</label>
                                    <div class="col-sm-10">
                                        <select id="country" class="js-example-basic-multiple select2 form-select" required name="model_id[]" multiple>
                                            <option value="">Select</option>
                                            @foreach ($models as $model)
                                                @if (in_array($model->id,$product->model_id))
                                                    <option value="{{ $model->id }}" selected>{{ $model->name }}</option>
                                                @else
                                                    <option value="{{ $model->id }}">{{ $model->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="price"
                                            placeholder="54.99" value="{{ $product->price }}" required
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Stocks</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="stocks"
                                            placeholder="15" required value="{{ $product->stocks }}"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" cols="30" rows="5" class="form-control" required>{{ $product->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Images</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFileMultiple" name="image[]" multiple>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
@endsection
