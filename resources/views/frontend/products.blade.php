@extends('layouts.front')
@section('title')
    Products
@endsection
@section('content')
    <main class="bgcart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 bg-white px-lg-0 pl-lg-2">
                    <div class="list-group-flush ">
                        <label class="list-group-item" type="button">
                            <p class="sidebartitle">CATEGORIES</p>
                        </label>
                        <div class="d-none d-lg-block">
                            <a href="{{route('productpage')}}"
                               class="list-group-item list-group-item-action list-group-item-primary bg-white">All</a>
                            @foreach($categories as $category)
                                <a href="{{route('productsPerCategory', $category->id)}}"
                                   class="list-group-item list-group-item-action list-group-item-primary bg-white">{{$category->name}}</a>
                            @endforeach
                        </div>
                        <div class="dropdown d-block d-lg-none">

                            <button class="btn btn-secondary dropdown-toggle btn btn-primary w-100" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CATEGORIES
                            </button>
                            <div class="dropdown-menu w-100  " aria-labelledby="dropdownMenuButton">
                                <a href="{{route('productpage')}}"
                                   class="dropdown-item">All</a>
                                @foreach($categories as $category)

                                    <a class="dropdown-item " href="{{route('productsPerBrand', $category->id)}}">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>

                    </div>


                    <div class="list-group-flush">

                        <label class="list-group-item" type="button">
                            <p class="sidebartitle mt-5">FILTER BY</p>
                        </label>
                        <div class="dropdown d-block d-lg-none">
                            <button class="btn btn-secondary dropdown-toggle btn btn-primary w-100" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BRANDS
                            </button>
                            <div class="dropdown-menu w-100  " aria-labelledby="dropdownMenuButton">
                                @foreach($brands as $brand)
                                    <a class="dropdown-item " href="{{route('productsPerBrand', $brand->id)}}">{{$brand->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-none d-lg-block">
                            @foreach($brands as $brand)
                                <a href="{{route('productsPerBrand', $brand->id)}}"
                                   class="list-group-item list-group-item-action list-group-item-primary bg-white">{{$brand->name}}</a>
                            @endforeach
                        </div>


                        <!-- Collapse -->


                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <h3 class="mb-2 mt-5">CATEGORIES</h3>
                        <select class="custom-select custom-select-xs ml-auto w-25 mb-2 mt-5">
                            <option selected="">NAME: A-Z</option>
                            <option>NAME: Z-A</option>
                        </select>
                    </div>
                    <hr>

                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                                <div class="card w-100">
                                    <img class="imgcategory" src="{{$product->photo ? asset ($product->photo->file): 'http://placehold.it/62x62'}}"/>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title d-flex justify-content-center text-center">{{$product->name}}</h5>
                                        <p class="card-text d-flex justify-content-center mt-auto text-center">{{$product->price}}</p>
                                        <a href="{{route('detail', $product->id)}}"
                                           class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>


        </div>

    </main>
@endsection
