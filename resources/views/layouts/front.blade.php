<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

  {{--  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700,800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" media="all" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{asset('css/front-app.css')}}">
    <title>@yield('title')</title>

</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-0">
        <a class="navbar-brand pl-2 mr-auto" href="#">EVNX.</a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active pr-lg-4">
                    <a class="nav-link" href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index.html#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pr-lg-4">
                    <a class="nav-link" href="#">BLOG</a>
                </li>
                <li class="nav-item dropdown pr-lg-4">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href=""
                       id="navbarDropdown" role="button">
                        CATEGORY
                    </a>
                    <div aria-labelledby="navbarDropdown" class="dropdown-menu ">
                        <a class="dropdown-item" href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index3.html#"><img height="34" id="dropdownfoto1" src="img/helm3.png" width="36"/> FULL FACE
                            HELMET</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index3.html#"><img height="34" id="dropdownfoto2" src="img/helm2.png" width="36"/>MODULAR
                            HELMET</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index3.html#"><img height="34" id="dropdownfoto3" src="img/open helm.png" width="36"/>HALF FACE
                            HELMET</a>
                    </div>
                </li>
                <li class="nav-item pr-lg-4">
                    <a class="nav-link" href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index4.html#">CONTACTS</a>
                </li>

            </ul>

            <div class="searchbar ml-auto">
                <input class="search_input" name="" placeholder="Search..." type="text">
                <a class="search_icon float-right" href="#"><i class="fas fa-search pt-1"></i></a>
            </div>
            <div class="mt-3 mt-lg-0">
                <a href="https://syntrawestcloud.be/FullStack/Guylian/eindwerk/index2.html#"> <i class="fas fa-shopping-cart fa-2x pl-lg-4 shopgebruiker "></i></a>
                <i class="far fa-user fa-2x pl-3 pr-lg-3 shopgebruiker"></i>
            </div>
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
                        <p>FULLFACE</p>
                        <p>MODULAR</p>
                        <p>HALFFACE HELMET</p>
                        <p>HELM MULTI MODEL</p>
                        <p>HELMET CARE</p>
                    </div>
                    <div class="col-6">
                        <p>VISOR</p>
                        <p>BALACLAVA</p>
                        <p>INTERCOM</p>
                        <p>PINLOCK (ANTI FOG)</p>
                    </div>
                </div>
            </div>
            <div class="col-3 pl-5">
                <h4 class="pb-5">CORPORATE INFO</h4>
                <p>ABOUT US</p>
                <p>CAREERS</p>
                <p>PRIVACY POLICY</p>
                <p>TERMS & CONDITIONS</p>
            </div>
            <div class="col-3">
                <h4 class="pb-5">CUSTOMER SERVICE</h4>
                <p>FAQ</p>
                <p>RETURN</p>
                <p>DELIVERY</p>
                <p>ORDER TRACKING</p>
                <p>CONTACT US</p>
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
{{--<script src="js/jquery.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js">
</script>--}}
<script src=""{{asset('js/font-app.js')}}></script>
</body>
</html>
