@extends('layouts.admin')
@section('title')
    All Products
@endsection
@section('content')
    <h1>All Products</h1>
    <hr>
    <div class="row">
        <div class="col-12">
            <a href="{{route('products.create')}}" class="btn btn-outline-primary btn-sm border-left-primary">
                <i class="fa fa-plus-circle"></i>
                Create Product
            </a>
            <div class="d-flex justify-content-center">
                <a href="{{route('products.index')}}"
                   class="badge badge-primary m-1 p-3">All</a>
                @foreach($brands as $brand)
                    <a href="{{route('admin.productsPerBrand', $brand->id)}}"
                       class="badge badge-primary m-1 p-3">{{$brand->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-12 mt-3">
            <table class="table table-striped">
                <tr>
                    <th scope="row">Id</th>
                    <th scope="row">Image</th>
                    <th scope="row"><i class="fas fa-tags"></i> Category</th>
                    <th scope="row"><i class="fas fa-copyright"></i> Brand</th>
                    <th scope="row"><i class="fab fa-product-hunt"></i> Product</th>
                    <th scope="row">Description</th>
                    <th scope="row">Price</th>
                    <th scope="row">Created At</th>
                    <th scope="row">Updated At</th>
                    <th scope="row">others</th>
                </tr>
                </thead>
                <tbody>
                @if($products)

                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td><img height="60" src="{{$product->photo ? asset( $product->photo->file) : 'http://placehold.it/62x62'}}" alt=""></td>
                            <td>{{$product->category ? $product->category->name : 'GEEN CATEGORY'}}</td>
                            <td>{{$product->brand ? $product->brand->name : 'GEEN BRAND'}}</td>
                            <td>
                                <a href="{{route('products.edit', $product->id)}}"> {{$product->name}}</a>
                            </td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td>
                                <a class="btn btn-outline-warning rounded-pill mb-1" href="{{route('products.edit',
                            $product->id)}}">Edit</a>
                                @if($product->deleted_at != null)
                                    <a class="btn btn-outline-success rounded-pill mb-1" href="{{route('admin.productrestore',
                            $product->id)}}">Not Active</a>
                                @else
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]])
                               !!}
                                    <div class="form-group">
                                        {!! Form::submit('Active',['class'=>'btn btn-outline-danger rounded-pill mb-1'])
                                         !!}
                                    </div>
                                    {!! Form::close() !!}
                                @endif

                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
