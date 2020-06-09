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

//Route::get('/admin', 'HomeController@index')->name('admin');


Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', function(){
        return view('admin.index');
    });
});

Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/brands', 'AdminBrandsController');
Route::resource('admin/categories','AdminCategoriesController');
Route::resource('admin/products','AdminProductsController',['index'=>'admin.products.index']);
Route::resource('admin/categories','AdminCategoriesController');
Route::resource('admin/products','AdminProductsController',['index'=>'admin.products.index']);
Route::get('admin/products/brand/{id}','AdminProductsController@productsPerBrand')->name('admin.productsPerBrand');
Route::resource('admin/photos','AdminPhotosController');
Route::resource('admin/posts','AdminPostsController');
Route::resource('admin/colors','AdminColorsController');
Route::resource('admin/blogs','AdminBlogsController');






