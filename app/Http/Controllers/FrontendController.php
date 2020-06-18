<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Category;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $brands= Brand::all();
        $products= Product::with(['brand','photo'])->get()->take(4);
        $categories= Category::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.index', compact('products','brands','blogs','photos','categories'));

    }

    public function products(){
        $brands= Brand::all();
        $products= Product::with(['brand','photo'])->get();
        $categories= Category::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.products', compact('products','brands','blogs','photos','categories'));
    }

    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['category','brand','photo'])->where('brand_id','=', $id)->get();
        return view('frontend.products',compact('products','brands'));

    }
}
