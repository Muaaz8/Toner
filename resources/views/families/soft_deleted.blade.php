@extends('layouts.admin')

@section('title')
    Family
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Families</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Family</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($softDeletedFamily as $family)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $family->name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $family->type?$family->type->name:"-" }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $family->brand->name }}</strong></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('families.restore', $family->id) }}" method="POST">
                                                            @csrf
                                                            @method("put")
                                                            <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i>Restore</button>
                                                        </form>
                                                        <form action="{{ route('families.forceDelete', $family->id) }}" method="POST">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i>Force Delete</button>
                                                        </form>
                                                    </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="4"> No Data </td>
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
