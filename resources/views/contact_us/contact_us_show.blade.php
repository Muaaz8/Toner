@extends('layouts.admin')

@section('title')
    Contact Us
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Products</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($data as $dt)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $dt->first_name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $dt->email }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $dt->message }}</strong></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="5"> No Data </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="content-backdrop fade"></div>
    </div>
@endsection
