@extends('layouts.front')
@section('title')
    Shopping cart
@endsection
@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>
@endsection
@section('content')
    <main class="bgcart">
        <div class="titeltjeblogs mb-5">
            <div class="container">
                <h1 class="text-white">Shopping Cart</h1>
            </div>
        </div>
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

                                        <div class="col-12 col-sm-12 col-md-4 text-md-right row">
                                            <div class="col-3 col-sm-3 col-md-6 text-xl-right" style="padding-top: 5px">
                                                <h6>{{$item['product_price']}} <span class="text-muted">€</span></h6>
                                            </div>
{{--
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
--}}
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
                <form action="{{ route('payment.checkout') }}" method="post" id="payment-form">
                    @csrf
                    {{ csrf_field() }}
                    <div class="row px-3">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="row">
                                {{--<div class="col-xl-7">

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

                                </div>--}}
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
                                        <div class="col-3 subtotal d-flex align-items-center justify-content-center py-4">
                                            <p class="carttotaltekst">Payment</p>
                                        </div>
                                        <div class="col-9 carttotals d-flex align-items-center py-4">
                                            <div class="form-group payment-group">
                                                <label for="card-element">
                                                    Credit or debit card
                                                </label>
                                                <div id="card-element">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>

                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">

                                        </div>
                                        <div class="col-xl-6 p-0">
                                            <div class="float-right">
                                                <button type="submit" class="my-4 py-3 checkout btn float-right px-lg-3">
                                                    PROCEED TO CHECKOUT
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </main>
@endsection
@section('scripts')
<script>
    (function() {
        // Create a Stripe client.
        console.log('running');
        const stripe = Stripe('pk_test_51Gz6nvK3yGF4wsPO7qW8SaPV8n6nsXm2Pm7vpmO4ZlWD9YAS7sZ40iQUwlyM3m917YZiJwegRvjC0UJbJ6y6xAga00Dd3v73JA');

        // Create an instance of Elements.
        const elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        const style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        const card = elements.create('card',
            {
                style: style,
                hidePostalCode: true,
            });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('name').value;
            const inputAddress = document.getElementById('inputAddress').value;
            const postbus = document.getElementById('inputZip').value;
            const city = document.getElementById('inputCity').value;
            const country = 'Belgium';

            const options = {
                name: name,
                address_line1: inputAddress,
                address_city: city,
                address_state: country,
                address_zip: postbus,
            };

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            const form = document.getElementById('payment-form');
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    })();
</script>
@endsection
