@extends('layouts.admin')

@section('title')
    Orders
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Orders Details</h5>
                    <h3 class="text-center"><strong>ORDER ID #</strong>{{ $order->id }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card" style="width: 100%">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>First Name </b> : {{ $order->first_name }}</li>
                                    <li class="list-group-item"><b>Last Name</b> : {{ $order->last_name }}</li>
                                    <li class="list-group-item"> <b>Company Name</b> : {{ $order->company_name }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card" style="width: 100%">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Address</b> : {{ $order->address }}</li>
                                    <li class="list-group-item"><b>Appartment</b> : {{ $order->appartment }}</li>
                                    <li class="list-group-item"> <b>Notes</b> : {{ $order->notes }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class=" mb-3">
                            <div class="wallet-table m-0">
                                <table class="table table-bordered checkout-table-das">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->details as $od)
                                            <tr>
                                                <td data-label="Product Name">{{ $od->products->name }}</td>
                                                <td data-label="Quantity">{{ $od->quantity }}</td>
                                                <td data-label="Price">$ {{ $od->product_price }}</td>
                                                <td data-label="Total">$ {{ $od->product_price*$od->quantity }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="3" class="text-center"><strong>Total Amount</strong></td>
                                            <td colspan="1"><strong>$ {{ $order->price }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="card">
                    <h5 class="card-header"> Status Update</h5>
                    <div class="row mb-3">
                        <div>
                            <form method="post" action="{{ route('order.update',['id'=>$order->id]) }}">
                                @csrf
                                <div class="d-flex justify-content-around">
                                    <input type="text" class="form-control" name="status" value="{{ $order->status }}" style="width: 80%;">
                                    <button class="btn btn-primary"> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-backdrop fade"></div>
        </div>
    @endsection