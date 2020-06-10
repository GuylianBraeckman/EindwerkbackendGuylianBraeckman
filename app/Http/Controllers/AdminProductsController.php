<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Color;
use App\Http\Requests\ProductsRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::all();
        $products = Product::with(['category','brand','photo','color'])->get();
        return view('admin.products.index',compact('products','brands','colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::select('name','id')->get();
        $brands = Brand::select('name','id')->get();
        $colors = Color::select('name','id')->get();

        return view ('admin.products.create', compact('brands','categories','colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        //
        $input = $request->all();
        if ($file = $request->file('photo_id')){
            $name = Time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Product::create($input);
        return redirect ('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::query()->findOrFail($id);
        $categories = Category::select('name','id')->get();
        $colors = Color::select('name','id')->get();
        $brands = Brand::select('name','id')->get();
        return view ('admin.products.edit', compact('product', 'categories','brands','colors'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::query()->findOrFail($id);
        if($product->photo !== null){
            File::delete($product->photo->file);
        }


        if ($file = $request->file('photo_id')) {
            $name = Time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file' => $name]);
            $input['photo_id'] = $photo->id;
        }
            $product->update($request->all());
            return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        if($product->photo !== null){
            unlink(public_path() . $product->photo->file);
            $product->photo->delete();
        }
        $product->delete();

        return redirect('admin/products');

    }

    public function productsPerBrand($id){
        $brands = Brand::all();
        $products = Product::with(['category','brand','photo'])->where('brand_id','=', $id)->get();
        return view('admin.products.index',compact('products','brands'));

    }
}
