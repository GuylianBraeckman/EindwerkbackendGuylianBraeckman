@extends('layouts.front')
@section('title')
    DASHBOARD
@endsection
@section('content')
    <main>
        <div class="container-fluid d-lg-none d-block">
            <div class="row">
                <div class="col-12 pt-5">
                    <a class="oranjetekst d-flex justify-content-center pb-5"
                       href=https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index3.html#><i
                            class="fas fa-arrow-left p-1"></i> BACK TO
                        CATEGORIES</a>
                    <img class="d-flex justify-content-center mx-auto" src="{{route("productpage")}}"/><span
                        class="sr-only">Previous
            </span>
                    <h5 class="mt-5 d-flex justify-content-center">{{$product->name}}</h5>
                    <p class="d-flex justify-content-center oranjetekst2">{{$product->price}}</p>
                    <p>{{$product->descriptions}}</p>
                    <div class="row d-flex text-center">
                        <div class="col-8 offset-2">

                            <div class="pt-5">
                                <a class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-auto" href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index2.html#">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-none d-lg-block">
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <a class="oranjetekst d-flex justify-content-center pb-5"
                               href="{{route("productpage")}}"><i
                                    class="fas fa-arrow-left p-1"></i> BACK TO
                                CATEGORIES</a>
                            <p class="teixseize text-center">{{$product->name}}</p>
                            <p class="d-flex justify-content-center oranjetekst2">{{$product->price}}</p>
                            <p>{{$product->description}}</p>

                            <a class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto addtocarttekst"
                               href="{{route('addToCart', $product->id)}}">ADD TO
                                CART</a>
                            <a class="oranjetekst d-flex justify-content-center pb-5 pt-4"
                               href="http://localhost:63342/EindwerkFrontEnd/index3.html?_ijt=g2kp5va6j6ch6dt1fr4d9i93m"><i
                                    class="fas fa-share-alt text-dark pr-2 pt-1"></i><u> SHARE THIS </u></a>
                        </div>
                    </div>

                </div>
                <div class="col-9 bgproduct">


                    <img class="d-flex justify-content-center mx-auto my-3" height="539" src="{{$product->photo ? asset(
                    $product->photo->file) : 'http://placehold.it/62x62'}}
                         width="465"/><span
                        class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" data-slide="next" href="#carouselExampleControls" role="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
