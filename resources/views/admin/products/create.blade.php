@extends('layouts.admin')
@section('title')
    Add Products
@endsection
@section('content')
    <h1 class="text-primary">All Products</h1>
    <hr>
    <form method="POST" action="{{action('AdminProductsController@store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-product-hunt"></i></div>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text"><i class="fas fa-tags"></i></label>
                        </div>
                        <select class="custom-select" name="category_id">
                            <option value="" disabled selected>Select a category</option>

                            @foreach($categories as $category)
                                <option value=" {{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text"><i class="fas fa-copyright"></i></label>
                        </div>
                        <select class="custom-select" name="brand_id">
                            <option value="" disabled selected>Select a brand</option>
                            @foreach($brands as $brand)
                                <option value=" {{$brand->id}}"> {{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo_id">Photo:</label>
                    <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text"><i class="fas fa-euro-sign"></i></label>
                        </div>
                        <input type="number" name="price" step="0.05">
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <div class="card">
                        <div class="card-header">
                            Description
                        </div>
                        <div class="card-body">
                            <textarea class="form-control rounded-0" name="description" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i> Create
                        Product
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection
