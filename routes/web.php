<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/','FrontendController@index')->name('shop');



//Route::get('/admin', 'PaymentCheckout@index')->name('admin');


Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });
});

Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/brands', 'AdminBrandsController');
Route::resource('admin/products','AdminProductsController',['index'=>'admin.products.index']);
Route::get('/admin/restore/{product}','adminProductsController@productRestore')->name('admin.productrestore');
Route::resource('admin/categories','AdminCategoriesController');
Route::resource('admin/products','AdminProductsController',['index'=>'admin.products.index']);
Route::get('admin/products/brand/{id}','AdminProductsController@productsPerBrand')->name('admin.productsPerBrand');
Route::resource('admin/photos','AdminPhotosController');
Route::resource('admin/posts','AdminPostsController');
Route::resource('admin/blogs','AdminBlogsController');


//FRONT ROUTES
Route::get('/products','FrontendController@products')->name('productpage');
Route::get('products/brand/{id}','FrontendController@productsPerBrand')->name('productsPerBrand');
Route::get('products/category/{id}','FrontendController@productsPerCategory')->name('productsPerCategory');
Route::get('/contact','FrontendController@contact')->name('contactpage');
Route::get('/cart','FrontendController@cart')->name('checkout');
// Route::post('/cart','FrontendController@updateQuantity')->name('quantity');
Route::get('/products/addToCart/{id}', 'FrontendController@addToCart')->name('addToCart');
Route::get('/detail/{id}','FrontendController@detail')->name('detail');
Route::get('/removeItem/{id}','FrontendController@removeItem')->name('removeItem');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/single_post/{id}','FrontendController@single_post')->name('single_post');
Route::get('/contact', 'ContactController@create');
Route::post('/contact','ContactController@store');

Route::get('/payment','FrontendController@payment')->name('payment');
Route::post('/payment', 'FrontendController@payment')->name('payment.checkout');
