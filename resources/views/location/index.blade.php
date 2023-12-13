@extends('layouts.admin')

@section('title')
    Locations
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Locations</h5>
                    <div class="table-responsive text-nowrap">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('location.create') }}"><button class="btn btn-primary me-2"> Add New Locations</button></a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Locations</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($locations as $location)
                                    <tr>
                                        <td  class="text-center">{{ $location->content }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="2"> No Data </td>
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
