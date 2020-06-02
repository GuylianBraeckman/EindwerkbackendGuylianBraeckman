@extends('layouts.admin')
@section('title')
    Edit Products
@endsection
@section('content')
    <h1 class="text-primary">All Products</h1>
    <hr>
    <form method="POST" action="{{action('AdminProductsController@update', $product->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab-fa-product-hunt"></i></div>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$product->name}}">
                        </div>
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
                                @if($product->category_id == $category->id)
                                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                                @else
                                    <option value=" {{$category->id}}"> {{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
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
                                @if($product->category_id == $category->id)
                                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                                @else
                                    <option value=" {{$category->id}}"> {{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <img class="img-thumbnail mb-3" src="{{$product->photo ? asset($product->photo->file) : 'http://place-hold
                    .it/400x400'}}" alt="">
                    <input type="file" class="form-control-file" id="photo_id" name="photo_id">
                </div>
            </div>
        </div>
    </form>
@endsection
