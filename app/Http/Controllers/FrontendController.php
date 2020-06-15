<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $brands= Brand::all();
        $products = Product::with(['brand','photo'])->get();
        return view('index', compact('products','brands'));
    }
}
