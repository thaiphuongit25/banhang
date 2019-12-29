<?php

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

Route::get('/', 'ProductsController@index')->name('products');
Route::get('/products/{slug}', 'ProductsController@show')->name('products_show');
Route::get('/product/{slug}', 'ProductsController@showCategories')->name('categories');
Route::get('/products', 'ProductsController@search')->name('products_search');
Route::get('/carts', 'CartsController@cart')->name('carts');
Route::get('/cart_products', 'CartsController@cartProducts')->name('carts_products');

Route::get('/suppliers', function () {
    return view('suppliers.index');
});

Route::get('/services', function () {
    return view('services.index');
});

Route::get('/news', function () {
    return view('news.index');
});

Route::get('/lien-he', function () {
    return view('contact.index');
});

Route::get('/information/chinh-sach-quy-dinh', function () {
    return view('policies.index');
});

Route::get('pages/quy-dinh-bao-hanh', function () {
    return view('pages.warranty');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('services', 'ServiceController');

Route::namespace('admin')->group(function () {
    Route::resource('admin/products', 'ProductsController');
});

// Route::get('/dangky', 'RegistrationController@create');
// Route::post('dangky', 'RegistrationController@store');
 
// Route::get('/dangnhap', 'SessionsController@create');
// Route::post('/dangnhap', 'SessionsController@store');
// Route::get('/dangxuat', 'SessionsController@destroy');