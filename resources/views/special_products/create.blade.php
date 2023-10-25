@extends('layouts.admin')

@section('title')
    Add New Product
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Add New Product</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('special_products.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="name"
                                            placeholder="Dell" required/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="price"
                                            placeholder="54.99" required
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Stocks</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="stocks"
                                            placeholder="15" required
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Product Description</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" class="form-control" id="basic-default-name" name="name"
                                            placeholder="Dell" /> --}}
                                            <textarea name="description" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Images</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFileMultiple" name="image[]" multiple required>
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
