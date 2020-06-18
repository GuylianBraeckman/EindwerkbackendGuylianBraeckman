@extends('layouts.front')
@section('title')
    Products
@endsection
@section('content')
    <main class="bgcart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 bg-white px-lg-0 pl-lg-2">
                    <div class="list-group-flush">
                        <button class="list-group-item" type="button">
                            <p class="sidebartitle">CATEGORIES</p>
                        </button>
                        <button class="list-group-item list-group-item-action pt-5 sidebartekst" type="button">ALL</button>
                        <button class="list-group-item list-group-item-action py-3 sidebartekst" type="button">MODULAR HELMET</button>
                        <button class="list-group-item list-group-item-action py-3 sidebartekst" type="button">HALF FACE HELMET</button>
                        <button class="list-group-item list-group-item-action py-3 sidebartekst" type="button">FULL FACE HELMET</button>
                    </div>
                    <div class="list-group-flush">

                        <button class="list-group-item" type="button">
                            <p class="sidebartitle mt-5">FILTER BY</p>
                        </button>
                        <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6 sidebartekst" data-toggle="collapse"
                           href="#brandCollapse">
                            Brand
                        </a>

                        <!-- Collapse -->
                        <div class="collapse" data-target="#brandGroup" data-toggle="simplebar" id="brandCollapse">

                            <!-- Search -->
                            <div data-options="{&quot;valueNames&quot;: [&quot;name&quot;]}" data-toggle="lists">

                                <!-- Input group -->
                                <div class="input-group input-group-merge mb-6">
                                    <input class="form-control form-control-xs search" placeholder="Search Brand" type="search">

                                    <!-- Button -->
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-border btn-xs">
                                            <i class="fe fe-search"></i>
                                        </button>
                                    </div>

                                </div>

                                <!-- Form group -->
                                <div class="form-group form-group-overflow list-group-flush mb-6" id="brandGroup">
                                    <div class="list">
                                        <div class="custom-control custom-checkbox mt-3 mb-1">
                                            <input class="custom-control-input" id="brandOne" type="checkbox">
                                            <label class="custom-control-label name" for="brandOne">
                                                <p class="sidebartekst mb-0">NOLAN</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input class="custom-control-input" id="brandTwo" type="checkbox">
                                        <label class="custom-control-label name" for="brandTwo">
                                            <p class="sidebartekst mb-0">ZEUS</p>
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input class="custom-control-input" id="brandThree" type="checkbox">
                                        <label class="custom-control-label name" for="brandThree">
                                            <p class="sidebartekst">CABERG</p>
                                        </label>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div>
                            <a class="nav-link dropdown-toggle font-size-lg text-reset border-bottom mb-6 sidebartekst"
                               data-toggle="collapse"
                               href="#priceCollapse" aria-expanded="true">
                                Price
                            </a>

                            <!-- Collapse -->
                            <div class="collapse" id="priceCollapse" data-toggle="simplebar" data-target="#priceGroup" style="">

                                <!-- Form group-->
                                <div class="form-group form-group-overflow mb-6" id="priceGroup" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input class="custom-control-input" id="priceOne" type="checkbox" checked="">
                                                            <label class="sidebartekst mt-3 custom-control-label" for="priceOne">
                                                                $100.00 - $199.00
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input class="custom-control-input" id="priceTwo" type="checkbox" checked="">
                                                            <label class="custom-control-label sidebartekst" for="priceTwo">
                                                                $200.00 - $299.00
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input class="custom-control-input" id="priceThree" type="checkbox">
                                                            <label class="custom-control-label sidebartekst" for="priceThree">
                                                                $300.00 - $399.00
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" id="priceFour" type="checkbox">
                                                            <label class="custom-control-label sidebartekst" for="priceFour">
                                                                $400.00 and Up
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 132px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>

                                <!-- Range -->
                                <div class="d-flex align-items-center">

                                    <!-- Input -->
                                    <input type="number" class="sidebartekst form-control form-control-xs" placeholder="$50.00" min="50">

                                    <!-- Divider -->
                                    <div class="text-gray-350 mx-2">‒</div>

                                    <!-- Input -->
                                    <input type="number" class="sidebartekst form-control form-control-xs" placeholder="$700" max="700">

                                </div>
                            </div>
                        </div>
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
                                    <img class="imgcategory" src="{{$product->photo->file}}"/>
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title d-flex justify-content-center text-center">{{$product->name}}</h5>
                                        <p class="card-text d-flex justify-content-center mt-auto text-center">{{$product->price}}</p>
                                        <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#"
                                           class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm6b.png"/>
                                 <div class="card-body d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm7b.png"/>
                                 <div class="card-body d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ARAI TOUR CROSS 3 - DETOUR RED</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto" >Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm4.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm8b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">HJC CL-17 CAPTAIN AMERICA (SNELL)</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm11b.png"/>
                                 <div class="card-body d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm12b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm5b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm12b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm6b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm5b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 px-lg-1 pb-1 d-flex">
                             <div class="card w-100">
                                 <img class="imgcategory" src="img/helm8b.png"/>
                                 <div class="card-body  d-flex flex-column">
                                     <h5 class="card-title d-flex justify-content-center text-center">ZEUS Z-806 NEW
                                         SUPERTECH II50 MATT</h5>
                                     <p class="card-text d-flex justify-content-center mt-auto text-center">$350.5</p>
                                     <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index5.html#" class="btn btn-primary buy-now d-flex justify-content-center mx-5 mx-lg-auto">Buy now</a>
                                 </div>
                             </div>
                         </div>
                     </div>--}}


                    </div>
                    <a href="#" class="btn btn-primary buy-now d-flex justify-content-center bg-dark mx-auto w-25 my-5">LOAD MORE</a>
                </div>

            </div>


        </div>

    </main>
@endsection
