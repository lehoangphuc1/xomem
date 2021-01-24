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
Route::get('/update-category/{category_id}','CategoryController@update_category');//update


Route::get('/delete-category/{category_id}','CategoryController@delete_category');//delete

