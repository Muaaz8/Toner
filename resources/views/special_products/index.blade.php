@extends('layouts.admin')

@section('title')
    Products
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Products</h5>
                    <div class="d-flex justify-content-center">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    {{-- <div class="accordion" id="accordionExample">
                        <div class="accordion-item  mb-3">
                            <h2 id="headingOne">
                            <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Upload CSV
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="{{ route('uploadCSV') }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for="csv"> Select CSV file:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="file" name="csv" id="csv">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="table-responsive text-nowrap">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('special_products.create') }}"><button class="btn btn-primary me-2"> Add New Special Product </button></a>
                            <a href="{{ route('special_products.softDeleted') }}"><button class="btn btn-primary me-2"> View Deleted Special Product</button></a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <th>Stocks</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($products as $product)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $product->name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $product->price }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $product->stocks }}</strong></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('special_products.edit',['special_product'=>$product->id]) }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <form action="{{ route('special_products.destroy', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="5"> No Data </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
@endsection
