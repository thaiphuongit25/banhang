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
Route::post('/buy_products', 'CartsController@buyProducts')->name('carts_products');

Route::get('/suppliers', function () {
    return view('suppliers.index');
});

Route::get('/services', function () {
    return view('services.index');
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

Route::get('/mypage', 'UserController@mypage');
Route::post('/update_info', 'UserController@update');
Route::get('/change-password', 'UserController@showChangePasswordForm');
Route::post('/change-password', 'UserController@changePassword');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('services', 'ServiceController')->only(['index', 'show']);
Route::resource('articles', 'ArticleController')->only(['index', 'show']);
Route::resource('comments', 'CommentController')->only(['store']);
Route::post('comments/reply', 'CommentController@reply')->name('comments.reply');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'ProductsController@index');
    Route::resource('products', 'ProductsController');
    Route::resource('brands', 'BrandsController');
    Route::resource('types', 'TypesController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('orders', 'OrdersController');
    Route::resource('services', 'ServicesController');
    Route::resource('article_categories', 'ArticleCategoriesController')->except(['destroy']);
    Route::resource('articles', 'ArticlesController');
});

Route::get('/news', 'ArticleController@index');
Route::get('/news/{id}', 'ArticleController@category_details')->name('article_category_details');
Route::get('/news-detail/{id}', 'ArticleController@show');
