@extends('layouts.front')
@section('title')
    Checkout page
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7">

            </div>
            <div class="col-lg-5">
                <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row">
                        @foreach($cart as $item)
                            <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="card-img-top img-thumbnail" src="{{$item['product_image'] ? asset
                            ('/images' .
                            $item['product_image']) : 'GEEN FOTOMOMENTEEL'}}" alt="">
                            </div>
                            <div class="col-12 text-sm-center col-sm-12 text-xl-left col-md-6">
                                <p class="product-name"><strong>{{$item['product_name']}}</strong></p>
                                <small class="text-muted">{{Str::limit($item['product_description'], 25, ' (...)')
                            }}</small>
                            </div>

                            <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                                <div class="col-3 col-sm-3 col-md-6 text-xl-right" style="padding-top: 5px">
                                    <h6><strong>{{$item['product_price']}} <span class="text-muted">€</span></strong></h6>
                                </div>
                                <small class="text-muted">Item Subtotal:&euro;
                                    {{$item['product_price']*$item['quantity']}}</small>

                                <small class="text-muted">Quantity::</small>
                                <form method="POST" action="{{action('FrontendController@updateQuantity')}}"
                                      enctype="multipart/form-data">

                                    @csrf
                                    @method('POST')
                                    <input class="form-control form-control-sm" type="number" name="quantity"
                                           value="{{$item['quantity']}}"
                                           min="1" max="100">
                                    <input class="form-control form-control-sm" type="hidden" name="id"
                                           value="{{$item['product_id']}}">
                                    <button class="btn btn-primary checkout  btn-sm mt-2" type="submit"><i class="fas
                                            fa-euro"></i>
                                        UPDATE PRICE
                                    </button>
                                </form>
                                <a class="text-center" data-toggle="tooltip" data-placement="bottom"
                                   title="remove product" href="{{route('removeItem', $item['product_id'])}}"><i
                                        class="fas fa-times"></i></a>
                            </div>
                            <hr>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>

@endsection
