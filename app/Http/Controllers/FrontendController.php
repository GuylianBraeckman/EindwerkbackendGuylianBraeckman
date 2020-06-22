<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Cart;
use App\Category;
use App\Country;
use App\Currency;
use App\PaymentPlatform;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        $products = Product::with(['brand', 'photo'])->get()->take(4);
        $categories = Category::all();
        $photos = Photo::all();
        $blogs = Blog::all()->take(3);
        return view('frontend.index', compact('products', 'brands', 'blogs', 'photos', 'categories'));

    }

    public function products()
    {
        $brands = Brand::all();
        $products = Product::with(['brand', 'photo'])->get();
        $categories = Category::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.products', compact('products', 'brands', 'blogs', 'photos', 'categories'));
    }

    public function contact()
    {
        $brands = Brand::all();
        $products = Product::with(['category', 'brand', 'photo']);
        $categories = Category::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.contact', compact('products', 'brands', 'blogs', 'photos', 'categories'));
    }

    public function productsPerBrand($id)
    {
        $brands = Brand::all();
        $products = Product::with(['category', 'brand', 'photo'])->where('brand_id', '=', $id)->get();
        $categories = Category::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.products', compact('products', 'brands', 'blogs', 'photos', 'categories'));

    }

    public function productsPerCategory($id)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::with(['category', 'brand', 'photo'])->where('category_id', '=', $id)->get();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.products', compact('products', 'brands', 'blogs', 'photos', 'categories'));
    }

    public function addToCart($id)
    {
        $product = Product::with(['category', 'brand', 'photo'])->where('id', '=', $id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        //dd(Session::get('cart'));
        return redirect('/');
    }

    public function cart()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $countries = Country::all();
        if (!Session::has('cart')) {
            return redirect('/');
        } else {
            $currentCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view('frontend.cart', compact('cart', 'brands', 'categories', 'countries'));
        }

    }

    public function checkout()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $countries = Country::all();
        if (!Session::has('cart')) {
            return redirect('/');
        } else {
            $currentCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view('frontend.checkout', compact('cart', 'brands', 'categories', 'countries'));
        }
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $photos = Photo::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('frontend.detail', compact('product', 'photos', 'categories', 'brands'));
    }

    public function single_post($id)
    {
        $blog = Blog::findOrFail($id);
        $photos = Photo::all();
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('frontend.single_post', compact('products', 'photos', 'categories', 'brands', 'blog'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        $photos = Photo::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('frontend.blog', compact('product', 'photos', 'categories', 'brands', 'blogs'));
    }

    public function updateQuantity(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        //(Session('cart'));
        Session::put('cart', $cart);

        return redirect('/cart');
    }

    public function removeItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        //(Session('cart'));
        Session::put('cart', $cart);

        return redirect('/cart');
    }

    public function PaymentCheckout()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        $currencies = Currency::all(); //eur usd gbp
        $paymentPlatforms = PaymentPlatform::all(); //paypal en stripe
        return view('payment', compact($brands, $categories,
            $products,
            $photos, $blogs))->with(['currencies' => $currencies, 'paymentPlatforms' =>  $paymentPlatforms]);
    }

}
