@extends('layouts.front')
@section('title')
    Shopping cart
@endsection
@section('content')
    <main class="bgcart">
        <div class="container-fluid">
            @if(Session::has('cart'))
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card shopping-cart">
                            <div class="card-header bg-dark text-light pb-3">
                                <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                Shopping cart <span class=" mr-auto badge badge-secondary">{{Session::has('cart') ? Session::get('cart')
                            ->totalQuantity : '0'
                            }}</span>
                                <div class="clearfix"></div>
                            </div>
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


                                <!-- END PRODUCT -->
                                <!-- PRODUCT -->
                                {{--<div class="row">
                                    <div class="col-12 col-sm-12 col-md-2 text-center">
                                        <img alt="prewiew" class="img-responsive" height="80" src="http://placehold.it/120x80" width="120">
                                    </div>
                                    <div class="col-12 text-sm-center col-sm-12 text-xl-left col-md-6">
                                        <p class="product-name"><strong>Teixeira Adventure</strong></p>
                                    </div>
                                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                            <h6><strong>25.00 <span class="text-muted">€</span></strong></h6>
                                        </div>
                                        <div class="col-4 col-sm-4 col-md-4">
                                            <div class="quantity">
                                                <input class="plus" type="button" value="+">
                                                <input class="qty" max="99" min="1" size="4" step="1" title="Qty" type="number"
                                                       value="1">
                                                <input class="minus" type="button" value="-">
                                            </div>
                                        </div>
                                        <div class="col-2 col-md-2 col-md-2 text-right">
                                            <button class="btn btn-outline-danger btn-xs" type="button">
                                                <i aria-hidden="true" class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>--}}
                                <hr>
                                <!-- END PRODUCT -->

                                <div class="card-footer">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input class="form-control" placeholder="coupon code" type="text">
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="checkout btn btn-default" type="submit" value="APPLY COUPON">
                                                    </div>

                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">

                                                <a class="btn btn-primary float-right ml-3 checkout" href="{{route('productpage')
                                                        }}">Continue shopping</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row">
                            <div class="col-xl-7">
                                <form>
                                    <h3 class="mt-5">contact information</h3>
                                    <div class="form-row ">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Full Name</label>
                                            <input type="name" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <h3 class="mt-3">Shipping Address</h3>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">

                                            <label for="inputState">Country</label>

                                            <select id="inputState" class="form-control">
                                                @foreach($countries as $country)
                                                <option selected>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity" placeholder="City">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-5">
                                <h3 class="pt-5">CART TOTALS</h3>
                                <div class="row">
                                    <div class="col-3 subtotal d-flex align-items-center justify-content-center py-4">
                                        <p class="carttotaltekst">SUBTOTAL</p>
                                    </div>
                                    <div class="col-9 carttotals d-flex align-items-center py-4">
                                        <p class="pl-5 subtotaltekst"> &euro; {{Session::get('cart')
                ->totalPrice}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 subtotal d-flex align-items-center justify-content-center py-4">
                                        <p class="carttotaltekst">SHIPPING</p>
                                    </div>
                                    <div class="col-9 carttotals d-flex align-items-center py-4">
                                        <p class="pl-5 subtotaltekst">Free shipping</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 subtotal d-flex align-items-center justify-content-center py-4">
                                        <p class="carttotaltekst">TOTAL</p>
                                    </div>
                                    <div class="col-9 carttotals d-flex align-items-center py-4">
                                        <p class="pl-5 subtotaltekst">&euro; {{Session::get('cart')
                ->totalPrice}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">

                                    </div>
                                    <div class="col-xl-6 p-0">
                                        <div class="float-right">
                                            <a class=" my-4 py-3 checkout btn float-right px-lg-3" href="">
                                                PROCEED TO CHECKOUT
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endif
    </main>
@endsection
