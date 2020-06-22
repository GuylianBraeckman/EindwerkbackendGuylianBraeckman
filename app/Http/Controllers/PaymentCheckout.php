<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Category;
use App\Currency;
use App\PaymentPlatform;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class PaymentCheckout extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $currencies = Currency::all(); //eur usd gbp
        $brands = Brand::all();
        $categories= Category::all();
        $products = Product::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        $paymentPlatforms = PaymentPlatform::all(); //paypal en stripe
        return view('payment')->with(['currencies'=> $currencies,'paymentPlatforms'=> $paymentPlatforms, $brands, $categories, $products,
         $photos, $blogs   ]);
    }
}
