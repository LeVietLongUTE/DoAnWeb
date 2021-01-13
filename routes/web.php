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


Route::get('/login','loginController@show_login');
Route::get('/register','loginController@show_register');
Route::get('/admin-layout','adminLayoutController@index');

Route::get('/dashboard','adminLayoutController@show_dashboard');

Route::POST('/dashboard','loginController@loginadmin');

Route::POST('/registeryet','loginController@register');
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

//list Breed
Route::get('/list-breed','breedController@show_listBreed');
Route::POST('/list-breed','breedController@show_listBreed');
//status Breed
Route::get('/unactive-breed/{breed_product_id}','breedController@un_active_breed');
Route::get('/active-breed/{breed_product_id}','breedController@active_breed');
//edit Breed
Route::get('/edit-breed/{breed_product_id}','breedController@edit_breed_product');
Route::POST('/edit-breed/{breed_product_id}','breedController@edit_breed_product');

Route::POST('/update-breed-product/{breed_product_id}','breedController@update_breedProduct');
Route::GET('/delete-breed/{breed_product_id}','breedController@delete_breed_product');


//product
//add product
Route::get('/add-product','productController@show_formAddproduct');
Route::POST('/add-product','productController@show_formAddproduct');
Route::POST('/save-product','productController@save_Product');

//list product
Route::get('/list-product','productController@show_listProduct');
Route::POST('/list-product','productController@show_listProduct');
//status Breed
Route::get('/unactive-product/{product_id}','productController@un_active_product');
Route::get('/active-product/{product_id}','productController@active_product');
//edit Breed
Route::get('/edit-product/{product_id}','productController@edit_product');
Route::POST('/edit-product/{product_id}','productController@edit_product');

Route::POST('/update-product/{product_id}','productController@update_product');
Route::GET('/delete-product/{product_id}','productController@delete_product');


//Gio thieu
Route::GET('/gioithieus','HomeController@gioithieu');
Route::GET('/cho','HomeController@gioithieucho');
Route::GET('/meo','HomeController@gioithieumeo');

//lienhe
Route::GET('/lienhe','HomeController@lienhe');