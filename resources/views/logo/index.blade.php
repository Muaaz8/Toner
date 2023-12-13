@extends('layouts.admin')

@section('title')
    Logo
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Logo</h5>
                    <div class="table-responsive text-nowrap">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('logo.create') }}"><button class="btn btn-primary me-2"> Add New Logo</button></a>
                            {{-- <a href="{{ route('dynamic_contents.softDeleted') }}"><button class="btn btn-primary me-2"> View Deleted Contents</button></a> --}}
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($contents as $content)
                                    <tr>
                                        <td  class="text-center"><img src="{{ $content->content }}" alt="logo"></td>
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
