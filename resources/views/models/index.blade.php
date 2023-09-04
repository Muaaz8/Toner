@extends('layouts.admin')

@section('title')
    Models
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Models</h5>
                    <div class="table-responsive text-nowrap">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('models.create') }}"><button class="btn btn-primary"> Add New Model </button></a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Family</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse ($models as $model)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $model->name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $model->family->name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $model->type->name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $model->brand->name }}</strong></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('models.edit',['model'=>$model->id]) }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <form action="{{ route('models.destroy', $model->id) }}" method="POST">
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
