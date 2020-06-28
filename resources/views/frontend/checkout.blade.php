@extends('layouts.front')
@section('title')
    Shopping cart
@endsection
@section('content')
    <main>
        <div class="titeltjeblogs mb-5">
            <div class="container">
                <h1 class="text-white">Shopping Cart</h1>
            </div>
        </div>

            <div class="shopping-cart">
                @if(Session::has('cart'))
                <div>
                    <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                    Shopping cart <span class=" mr-auto badge badge-secondary">{{Session::has('cart') ? Session::get('cart')
                            ->totalQuantity : '0'
                            }}</span>
                </div>
                <div class="column-labels">

                    <label class="product-image">Image</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                </div>

                <div class="product">
                    @foreach($cart as $item)
                    <div class="product-image">
                        <img src={{$item['product_image'] ? asset
                            ('/images' .
                            $item['product_image']) : 'GEEN FOTOMOMENTEEL'}}">
                    </div>
                    <div class="product-details">
                        <div class="product-title">{{$item['product_name']}}</div>
                        <p class="product-description"> {{Str::limit($item['product_description'], 25, ' (...)')
                            }}</p>
                    </div>
                    <div class="product-price">{{$item['product_price']}}</div>
                    <div class="product-quantity">
                        <input type="number" value="2" min="1">
                    </div>
                    <div class="product-removal">
                        <button class="remove-product">
                            Remove
                        </button>
                    </div>
                    <div class="product-line-price">{{$item['product_price']*$item['quantity']}}</div>
                </div>



                <div class="totals">
                    <div class="totals-item">
                        <label>Subtotal</label>
                        <div class="totals-value" id="cart-subtotal">71.97</div>
                    </div>
                    <div class="totals-item">
                        <label>Tax (5%)</label>
                        <div class="totals-value" id="cart-tax">3.60</div>
                    </div>
                    <div class="totals-item">
                        <label>Shipping</label>
                        <div class="totals-value" id="cart-shipping">15.00</div>
                    </div>
                    <div class="totals-item totals-item-total">
                        <label>Grand Total</label>
                        <div class="totals-value" id="cart-total">90.57</div>
                    </div>
                </div>

                <button class="checkout">Checkout</button>

            </div>
@endif
    </main>

@endsection
