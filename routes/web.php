<?php

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
//admin
Route::get('/', 'HomeController@index');



Route::get('/trangchu', 'HomeController@index');
Route::post('/search-product', 'HomeController@search'); //tim kiem san pham






//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');

//category
Route::get('/add-category', 'CategoryController@add_category');  //add
Route::post('/save-category','CategoryController@save_category'); //save
Route::get('/all-category', 'CategoryController@all_category');//show

Route::get('/edit-category/{category_id}','CategoryController@edit_category');//edit
Route::post('/update-category/{category_id}','CategoryController@update_category');//update

Route::get('/delete-category/{category_id}','CategoryController@delete_category');//delete


//brand
Route::get('/add-brand', 'BrandController@add_brand');  //add
Route::post('/save-brand', 'BrandController@save_brand');  //save
Route::get('/all-brand', 'BrandController@all_brand');  //show

Route::get('/edit-brand/{brand_id}','BrandController@edit_brand');//edit
Route::post('/update-brand/{brand_id}','BrandController@update_brand');//update

Route::get('/delete-brand/{brand_id}','BrandController@delete_brand');//delete


//product
Route::get('/add-product', 'ProductController@add_product');  //add
Route::post('/save-product', 'ProductController@save_product');  //save
Route::get('/all-product', 'ProductController@all_product');  //show

Route::get('/edit-product/{product_id}','ProductController@edit_product');//edit
Route::post('/update-product/{product_id}','ProductController@update_product');//update

Route::get('/delete-product/{product_id}','ProductController@delete_product');//delete


//product-detail

Route::get('/detail-product/{product_slug}','ProductController@detail_product');
Route::get('/category-product/{category_id}','ProductController@category_product');//show product by name