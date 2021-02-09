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


//cart
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-cart','CartController@show_cart');
/*Route::get('/delete-cart/{row_id}','CartController@delete_cart');*/
/*Route::post('/update-cart-quantity/{row_id}','CartController@update_cart_quantity');*/
Route::get('/update-cart/{id}/{qty}','CartController@update_cart');
Route::get('/delete-cart/{rowId}','CartController@delete_cart');

//cart-ajax
Route::get('/add-cart-ajax/{id}','CartController@add_cart_ajax');
Route::get('/check-cart-ajax','CartController@check_cart_ajax');



//login-checkout
Route::get('/login-checkout','CheckOutController@login_checkout');
Route::get('/logout','CheckOutController@logout_checkout');
Route::post('/login-customer','CheckOutController@login_customer');

//register
Route::post('/add-customer','CheckOutController@add_customer');

Route::get('/checkout','CheckOutController@checkout');
Route::post('/save-checkout','CheckOutController@save_checkout');
Route::get('/payment','CheckOutController@payment');
Route::post('/order-place','CheckOutController@order_place');


//order-manage
Route::get('/order-manage','CheckOutController@order_manage');
Route::get('/view-order/{orderId}','CheckOutController@view_order');





//coupon frontend
Route::post('/check-coupon','CartController@check_coupon');



//coupon backend
Route::get('/add-coupon','CouponController@add_coupon');
Route::post('/save-coupon','CouponController@save_coupon');
Route::get('/list-coupon','CouponController@list_coupon');



