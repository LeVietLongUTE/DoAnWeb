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
/* ---- Front End ---- */
Route::get('/','HomeController@index');

Route::get('/trang-chu','HomeController@index');

/* ---- Back End ---- */


Route::get('/login','loginController@index');
Route::get('/register','registerController@index');
Route::get('/admin-layout','adminLayoutController@index');

Route::get('/dashboard','adminLayoutController@show_dashboard');

Route::POST('/dashboard','loginController@loginadmin');

Route::POST('/registeryet','regiseterController@register');
Route::get('/logout','loginController@logout');
//Category
//add category
Route::get('/add-category-product','adminLayoutController@show_formAddCategory');
Route::POST('/add-category-product','adminLayoutController@show_formAddCategory');
Route::POST('/save-category-product','adminLayoutController@save_categoryProduct');

//list category
Route::get('/list-category','adminLayoutController@show_listCategory');
Route::POST('/list-category','adminLayoutController@show_listCategory');
//status category
Route::get('/unactive-category/{category_product_id}','adminLayoutController@un_active_category');
Route::get('/active-category/{category_product_id}','adminLayoutController@active_category');
//edit category
Route::get('/edit-category/{category_product_id}','adminLayoutController@edit_category_product');
Route::POST('/edit-category/{category_product_id}','adminLayoutController@edit_category_product');
Route::POST('/update-category-product/{category_product_id}','adminLayoutController@update_categoryProduct');
Route::GET('/delete-category/{category_product_id}','adminLayoutController@delete_category_product');

//Breed
//add Breed
Route::get('/add-breed-product','breedController@show_formAddBreed');
Route::POST('/add-breed-product','breedController@show_formAddBreed');
Route::POST('/save-breed-product','breedController@save_breedProduct');

//list category
Route::get('/list-breed','breedController@show_listBreed');
Route::POST('/list-breed','breedController@show_listBreed');
//status category
Route::get('/unactive-breed/{breed_product_id}','breedController@un_active_breed');
Route::get('/active-breed/{breed_product_id}','breedController@active_breed');
//edit category
Route::get('/edit-breed/{breed_product_id}','breedController@edit_breed_product');
Route::POST('/edit-breed/{breed_product_id}','breedController@edit_breed_product');

Route::POST('/update-breed-product/{breed_product_id}','breedController@update_breedProduct');
Route::GET('/delete-breed/{breed_product_id}','breedController@delete_breed_product');