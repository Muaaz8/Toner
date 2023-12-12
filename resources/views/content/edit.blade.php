@extends('layouts.admin')

@section('title')
    Edit Content
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Edit Content</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('dynamic_contents.update',['dynamic_content'=>$content->id]) }}">
                                @method('put')
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" name="name" value="{{ $content->name }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Content</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" name="content" >{{ $content->content }}
                                        </textarea>
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
