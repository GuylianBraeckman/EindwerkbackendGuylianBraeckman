<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Category;
use App\Mail\Contact;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {//dit staat in verbinding met de show route!!
        $brands = Brand::all();
        $products = Product::with(['category','brand','photo']);
        $categories= Category::all();
        $photos = Photo::all();
        $blogs = Blog::all();
        return view('frontend.contact',compact('products','brands', 'blogs','photos','categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Mail::to(request('email'))->send(new Contact($data));
        Session::flash('mail_sent', "The mail has been sent, we'll contact you as soon as possible");
        return redirect('contact');

    }
}
