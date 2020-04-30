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

Route::get('/', 'catCon@index');
Route::get('/Clothing-website', 'catCon@index')->name('home');
Route::get('/Clothing-website/categories/{id}','ecom@show')->name('categories');
//Route::post('/Clothing-website/contact','ecom@contcat')->name('contact');


Route::get('/Clothing-website/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/Clothing-website/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/Clothing-website/contact', function () {
    return view('Clothing-website.contact');
})->name('contact');
Route::get('/Clothing-website/sales','ecom@sales')->name('sales');

//Route::get('/upadata/{id}','ecom@')->name('');
Route::get('/forgetSession/{id}','buying@forgetSession')->name('forgetSession');
Route::get('/buying/{name}','buying@setSession')->name('buying');
Route::get('/buying2','buying@allSession')->name('allSession');
Route::get('/store','buying@allSession')->name('store');
Route::post('/update','buying@update')->name('update');
//Route::get('/update','buying@update')->name('update');
//Route::resource('/buy','buying');
//Route::get('/updateCart','buying@update')->name('update');
Route::get('/Clothing-website/cart','buying@pageCart')->name('cart'); 

// Route::post('/setSession/{id}','ecom@setSession')->name('setSession');
// Route::post('/getSession/{id}','ecom@getSession')->name('getSession');
// Route::post('/allSession','ecom@allSession')->name('allSession');
Route::get('/Clothing-website/shop', 'prodCon@index')->name('shop');

// Route::get('/Clothing-website/cart', function () {
//     return view('Clothing-website.cart');
// })->name('cart');

Route::get('/Clothing-website/history', function () {
    return view('Clothing-website.history');
})->name('history');




// Route::get('/Clothing-website/sales', function () {
//     return view('Clothing-website.sales');
// })->name('sales');

// Route::get('/Clothing-website/categories', function () {
//     return view('Clothing-website.categories');
// })->name('categories');

Route::resource('/cat', 'catCon');
Route::resource('/prod', 'prodCon');
Route::resource('/msg', 'msgCon');
Route::resource('/his', 'hisCon');

Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');

//<!-- <td class="product-remove"><a href="{{route('forgetSession',$prod->id)}}"><i class="fa fa-times"></i></a></td> -->
                                                    