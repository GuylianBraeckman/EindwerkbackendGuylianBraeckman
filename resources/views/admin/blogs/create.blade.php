@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <h1>Create Blogs</h1>
        @include('includes.form_error')
    </div>
    <hr>
    <form method="POST" action="{{action('AdminBlogsController@store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"></div>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Content
                        </div>
                        <div class="card-body">
                            <textarea class="form-control rounded-0" name="content" rows="10"></textarea>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="photo_id">Photo:</label>
                    <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i> Create
                        Blog
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection
