@extends('layouts.front')
@section('title')
    DASHBOARD
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="carousel slide" data-ride="carousel" id="carouselExampleCaptions">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="..." class="d-block w-100" src="images/bghome.png">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-xl-8 offset-lg-2">
                                        <div class="row">
                                            <div class=" col-xl-6 text-left">
                                                <h5 class="text-focus-in">TEIXEIRA ADVENTURE</h5>
                                                <p class="text-focus-in montserratlight">Advanced Polycarbonate
                                                    Composite Shell</p>
                                                <div class="row p-0">

                                                    <div class="borders col-4 d-flex bg-white align-items-center p-4">
                                                        <p class="witteknopkes m-0 p-0 mr-auto">COLOR</p>
                                                        <img height="20" src="img/kleurtje.png" width="20"/>
                                                    </div>
                                                    <div class="borders col-4 d-flex bg-white align-items-center mr-auto">
                                                        <p class="witteknopkes mb-0">PRICE</p>
                                                        <p class="oranjetekst mb-0 pl-1">€125.90</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img alt="..." class="d-block w-100" src="images/bghome.png">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-xl-8 offset-lg-2">
                                        <div class="row">
                                            <div class="col-xl-6 text-left">
                                                <h5 class="text-focus-in slide-fwd-center">TEIXEIRA ADVENTURE</h5>
                                                <p class="text-focus-in montserratlight">Advanced Polycarbonate
                                                    Composite Shell</p>
                                                <div class="row p-0">

                                                    <div class="borders col-4 d-flex bg-white align-items-center p-4">
                                                        <p class="witteknopkes m-0 p-0 mr-auto">COLOR</p>
                                                        <img height="20" src="img/kleurtje.png" width="20"/>
                                                    </div>
                                                    <div class="borders col-4 d-flex bg-white align-items-center mr-auto">
                                                        <p class="witteknopkes mb-0">PRICE</p>
                                                        <p class="oranjetekst mb-0 pl-1">€125.90</p>
                                                    </div>
                                                    <div class="borders col-4 d-flex align-items-center oranjestuk">
                                                        <p class="mb-0">VIEW PRODUCT</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleCaptions" role="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" data-slide="next" href="#carouselExampleCaptions" role="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    <main>
        <section class="text-center my-3">
            <h3 class=py-5>NEW PRODUCTS</h3>


            <div class="carousel slide d-block w-100" data-ride="carousel" id="recipeCarousel">
                <div class="carousel-inner w-100" role="listbox">

                    <div class="carousel-item row no-gutters active">
                        @foreach($products->slice(0,4) as $product)
                            <div class="d-none d-xl-block">
                                <div class="col-lg-3 float-left">
                                    <div class="row achtergrond2">

                                        <div class="col-10 offset-1">
                                            <p class="pt-5 text-left helmtype montserratlight">{{$product->name}}</p>
                                            <div class=" row">
                                                <div class="col-6">
                                                    <p class="prijs text-left">{{$product->price}}</p>
                                                    <a href="{{route('detail', $product->id)}}"><button class="mr-auto buy-now mt mb-4">BUY NOW</button></a>
                                                </div>
                                                <div class="col-6">
                                                    <img class="pr-5 img-fluid imgfoto" src="{{$product->photo->file}}"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach($products->slice(0,4) as $product)
                            <div class="d-block d-xl-none">
                                <div class=" achtergrond w-100 float-left">
                                    <div class="row">
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <p class="pt-5 text-left helmtype montserratlight">{{$product->name}}</p>
                                            <p class="prijs text-left">{{$product->price}}</p>


                                        </div>
                                        <div class="col-6">
                                            <img class="pr-5 pt-5 img-fluid imgfoto" src="{{$product->photo->file}}"/>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="d-none d-xl-block">

                            @foreach($products->slice(0,4) as $product)
                                <div class="d-none d-xl-block">
                                    <div class="col-lg-3 float-left">
                                        <div class="row achtergrond2">

                                            <div class="col-10 offset-1">
                                                <p class="pt-5 text-left helmtype montserratlight">{{$product->name}}</p>
                                                <div class=" row">
                                                    <div class="col-6">
                                                        <p class="prijs text-left">{{$product->price}}</p>
                                                        <a href="{{route('detail', $product->id)}}"><button class="mr-auto buy-now mt mb-4">BUY NOW</button></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <img class="pr-5 img-fluid imgfoto" src="{{$product->photo->file}}"/></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="d-block d-xl-none">
                            @foreach($products->slice(0,4) as $product)
                                <div class="d-block d-xl-none">
                                    <div class=" achtergrond w-100 float-left">
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-5">
                                                <p class="pt-5 text-left helmtype montserratlight">{{$product->name}}</p>
                                                <p class="prijs text-left">{{$product->price}}</p>
                                                <a href="{{route('detail', $product->id)}}"><button class="mr-auto buy-now mt mb-4">BUY NOW</button></a>
                                            </div>
                                            <div class="col-6">
                                                <img class="pr-5 pt-5 img-fluid imgfoto" src="{{$product->photo->file}}"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="d-none d-xl-block">
                            @foreach($products->slice(0,4) as $product)
                                <div class="d-none d-xl-block">
                                    <div class="col-lg-3 float-left">
                                        <div class="row achtergrond2">

                                            <div class="col-10 offset-1">
                                                <p class="pt-5 text-left helmtype montserratlight">{{$product->name}}</p>
                                                <div class=" row">
                                                    <div class="col-6">
                                                        <p class="prijs text-left">{{$product->price}}</p>
                                                        <a href="{{route('detail', $product->id)}}"><button class="mr-auto buy-now mt mb-4">BUY NOW</button></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <img class="pr-5 img-fluid imgfoto" src="{{$product->photo->file}}"/></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="d-block d-xl-none">
                            @foreach($products->slice(0,4) as $product)
                                <div class="d-block d-xl-none">
                                    <div class=" achtergrond w-100 float-left">
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-5">
                                                <p class="pt-5 text-left helmtype montserratlight">{{$product->name}}</p>
                                                <p class="prijs text-left">{{$product->price}}</p>
                                                <a href="{{route('detail', $product->id)}}"><button class="mr-auto buy-now mt mb-4">BUY NOW</button></a>
                                            </div>
                                            <div class="col-6">
                                                <img class="pr-5 pt-5 img-fluid imgfoto" src="{{$product->photo->file}}"/>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="mt-5 row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <div class="col-xl-4 lijn">
                            <div class="d-flex">
                                <h3>BLOG x EVENTS</h3>
                                <a class="underline ml-auto" href="{{'/blog'}}">SEE ALL</a>
                            </div>
                            @foreach($blogs as $blog)
                                <div class="row">
                                    <div class="col-4">
                                        <img class="img-fluid w-100" src={{$blog->photo->file}}/>

                                    </div>
                                    <div class="col-8">
                                        <p class="datums">{{$blog->created_at}}</p>
                                        <p class="text-dark montserratlight">{{$blog->title}}</p>

                                        <a class="underline ml-auto" href="{{route('single_post', $blog->id)}}">READ MORE</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-none d-xl-block mt-5 mt-lg-0 img-fluid bannerbg col-lg-8">
                            <div class="row">
                                <div class="col-7">
                                </div>
                                <div class="text-left pt-5 col-5">
                                    <h2>AGV <br> BEST <br> SELLERS</h2>
                                    <p class="montserratlight text-white">see our most popular products</p>
                                    <button class="mt-5 buy-now">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-xl-none container-fluid">
                            <div class="my-5 row bannerbgmobile">
                                <div class="col-6 offset-3">
                                    <h2 class="pt-5">AGV BEST SELLERS</h2>
                                    <p class="montserratlight text-white pt-5">see our most popular products</p>
                                    <button class="mt-5 buy-now my-5">SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content">
                            <form>
                                <h2>SIGN UP TO OUR NEWSLETTER</h2>
                                <div class="input-group">
                                    <input class="form-control" placeholder="ENTER YOUR EMAIL ADRESS..." type="email">
                                    <span class="input-group-btn">
                                    <button class="btn" type="submit">SIGN UP</button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class=" brandsdiv d-flex justify-content-center">
                        <a href="http://www.nolanhelmets.com"><img src="images/brand1.jpg" alt=""></a>
                        <a href="http://www.nolanhelmets.com"><img src="images/brand2.jpg" alt=""></a>
                        <a href="http://www.nolanhelmets.com"><img src="images/brand3.jpg" alt=""></a>
                        <a href="http://www.nolanhelmets.com"><img src="images/brand4.jpg" alt=""></a>
                        <a href="http://www.nolanhelmets.com"><img src="images/brand5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
