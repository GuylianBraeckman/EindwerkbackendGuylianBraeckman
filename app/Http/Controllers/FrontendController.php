<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $brands= Brand::all();
        $products= Product::with(['brand','photo'])->get();
        $blogs =Blog::all()->take(3);
        $photos = Photo::all();
        return view('index', compact('products','brands','blogs','photos'));
    }
}
