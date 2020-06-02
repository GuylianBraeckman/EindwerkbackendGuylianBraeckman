@extends('layouts.admin')
@section('title')
    ALL PRODUCTS
@endsection
@section('content')
    <h1>Products</h1>
    <hr>
    <div class="row">
        <div class="row">
            <div class="col-12">
                <a href="{{route('products.create')}}" class="btn btn-outline-success btn-sm border-left-success">
                    <i class="fa fa-plus-circle"></i>
                    Create Product
                </a>
                <div class="d-flex justify-content-center">
                    <a href="{{route('products.index')}}"
                       class="badge badge-success m-1 p-3">All</a>
                    @foreach($brands as $brand)
                        <a href="{{route('admin.productsPerBrand', $brand->id)}}"
                           class="badge badge-success m-1 p-3">{{$brand->name}}</a>
                    @endforeach
                </div>
            </div>
        <div class="col-12 mt-3">
            <table class="table table-striped">
                <thead class="bg-success text-white">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">created At</th>
                    <th scope="col">Updated at</th>
                </tr>
                </thead>
                <tbody>
                @if($products)
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td><img height="60" src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/62x62'}}"
                                     alt=""></td>
                            <td>{{$product->category ? $product->category->name: 'GEEN CATEGORY'}}</td>
                            <td>{{$product->brand ? $product->brand->name: 'GEEN BRAND'}}</td>
                            <td> <a href="{{route('products.edit', $product->id)}}"> {{$product->name}}</a></td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
