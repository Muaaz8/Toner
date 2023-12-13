@extends('layouts.admin')

@section('title')
    Add New Location
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Add New Location</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('location.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="name" value="location"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Location</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" name="content" >
                                        </textarea>
                                        {{-- <input type="text" name="content" class="form-control"> --}}
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

    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
