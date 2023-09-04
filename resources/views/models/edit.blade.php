@extends('layouts.admin')

@section('title')
    Edit Model
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Edit Model</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('models.update',['model'=>$model->id]) }}">
                                @method('put')
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Model Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="name" value="{{ $model->name }}"
                                            placeholder="Dell" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Family</label>
                                    <div class="col-sm-10">
                                        <select id="country" class="select2 form-select" name="family_id">
                                            <option value="">Select</option>
                                            @foreach ($families as $family)
                                                @if ($family->id == $model->family_id)
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
                                        <select id="country" class="select2 form-select" name="type_id">
                                            <option value="">Select</option>
                                            @foreach ($types as $type)
                                                @if ($type->id == $model->type_id)
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
                                        <select id="country" class="select2 form-select" name="brand_id">
                                            <option value="">Select</option>
                                            @foreach ($brands as $brand)
                                                @if ($brand->id == $model->brand_id)
                                                    <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                @else
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- brand_id --}}
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
