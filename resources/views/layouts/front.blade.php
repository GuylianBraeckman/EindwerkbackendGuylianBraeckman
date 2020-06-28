<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   {{-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" media="all" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{asset('css/front-app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" media="all" rel="stylesheet">
    <title>@yield('title')</title>

    @yield('extra-css')

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-0">
        <a class="navbar-brand pl-2 mr-auto" href="#">EVNX.</a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-target="#navigationbar" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigationbar">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active pr-lg-4">
                    <a class="nav-link" href="{{'/'}}">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pr-lg-4">
                    <a class="nav-link" href="{{'/blog'}}">BLOG</a>
                </li>
                <li class="nav-item dropdown pr-lg-4">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown"
                       href="{{route('productpage')}}"
                       id="navbarDropdown" role="button">
                        CATEGORY
                    </a>
                    <div aria-labelledby="navbarDropdown" class="dropdown-menu ">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{route('productsPerCategory', $category->id)}}">{{$category->name}}</a>
                            <div class="dropdown-divider"></div>
                        @endforeach

                    </div>
                </li>
                <li class="nav-item pr-lg-4">
                    <a class="nav-link" href="{{'/contact'}}">CONTACTS</a>
                </li>

            </ul>

            <div class="searchbar ml-auto">
                <input class="search_input" name="" placeholder="Search..." type="text">
                <a class="search_icon float-right" href="#"><i class="fas fa-search pt-1"></i></a>
            </div>
            <div class="mt-3 mt-lg-0">
                <a href="{{route('checkout')}}">
                     <span class="fa-stack fa-2x" data-count="{{Session::has('cart') ? Session::get('cart')->totalQuantity:
                '0'}}">
                    <i class="fa fa-shopping-cart fa-stack-2x shopgebruiker"></i>
                </span>
                </a>


                <a href="{{ route('login') }}"><i class="far fa-user fa-2x pl-3 pr-lg-3 shopgebruiker"></i></a>


                </span>
            </div>

        </div>
    </nav>
</header>
@yield('content')
<footer>
    <div class="container-fluid  p-0">
        <div class="row pl-4 mt-5 pt-5 mr-0">
            <div class="col-6">
                <h4 class="pb-5 pl-5">CATEGORIES</h4>
                <div class="row">
                    <div class="col-6 pl-5">
                        <a href=""><p>FULLFACE</p></a>
                        <a href=""><p>MODULAR</p></a>
                        <a href=""><p>HALFFACE HELMET</p></a>
                        <a href=""><p>HELM MULTI MODEL</p></a>
                        <a href=""><p>HELMET CARE</p></a>
                    </div>
                    <div class="col-6">
                        <a href=""><p>VISOR</p></a>
                        <a href=""><p>BALACLAVA</p></a>
                        <a href=""><p>INTERCOM</p></a>
                        <a href=""><p>PINLOCK (ANTI FOG)</p></a>
                    </div>
                </div>
            </div>
            <div class="col-3 pl-5">
                <h4 class="pb-5">CORPORATE INFO</h4>
                <a href=""><p>ABOUT US</p></a>
                <a href=""><p>CAREERS</p></a>
                <a href=""><p>PRIVACY POLICY</p></a>
                <a href=""><p>TERMS & CONDITIONS</p></a>
            </div>
            <div class="col-3">
                <h4 class="pb-5">CUSTOMER SERVICE</h4>
                <a href=""><p>FAQ</p></a>
                <a href=""><p>RETURN</p></a>
                <a href=""><p>ORDER TRACKING</p></a>
                <a href=""><p>CONTACT US</p></a>
            </div>
        </div>
        <div class="row pl-4 pt-5 mr-0">
            <div class="col-6 pl-5">
                <h4 class="pb-5">FOLLOW US</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <div class="col-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </div>
                            <div class="col-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </div>
                            <div class="col-2">
                                <i class="fab fa-pinterest-p fa-2x"></i>
                            </div>
                            <div class="col-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </div>
                            <div class="col-2">
                                <i class="fab fa-google-plus-g fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark container-fluid">
            <div class="col-lg-4 offset-lg-4">
                <p class="navbar-brand d-flex justify-content-center">EVNX.</p>
                <p class="d-flex justify-content-center pb-5">Copyright © 2017 EVNX. Shopify TPowered by Shopify.</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('js/front-app.js')}}"></script>

@yield('scripts')
</body>
</html>
