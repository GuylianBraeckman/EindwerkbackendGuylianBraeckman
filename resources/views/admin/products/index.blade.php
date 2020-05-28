@extends('layouts.admin')
@section('title')
    ALL PRODUCTS
@endsection
@section('content')
    <h1>users</h1>
    <hr>
    <div class="row">
        <div class="col-12">
            {{--filters--}}
        </div>
        <div class="col-12 mt-3">
            <table class="table table-striped">
                <thead class="bg-primary text-white">
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
                        <td>{{$product->id}}</td>
                        <td>
                            <img height="62" src="{{$product->photo ? asset('/images/products/' . $product->photo->file) :'http://placehold
                            .it/62x62'}}" alt="">
                        </td>
                        <td>{{$product->category ? $product->category->name: 'GEEN CATEGORY'}}</td>
                        <td>{{$product->brand ? $product->brand->name: 'GEEN BRAND'}}</td>
                        <td></td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
