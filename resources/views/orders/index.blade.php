@extends('layouts.admin')

@section('title')
    Orders
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Orders</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($orders as $order)
                                    <td>{{ $order->user_id }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ Str::upper($order->status) }}</td>
                                    <td><a href=""><button type="button" class="btn btn-primary">View</button></a></td>
                                @empty

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
