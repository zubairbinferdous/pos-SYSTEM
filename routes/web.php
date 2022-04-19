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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/user/logout', 'HomeController@Logout')->name('logout');


// all-product 
Route::get('/allproduct', 'HomeController@allProduct')->name('allProduct');
Route::post('/insert_product','HomeController@product');
Route::get('/addproduct', 'HomeController@addProduct')->name('addProduct');
Route::get('/delete-product/{id}', 'HomeController@deleteProduct');
Route::get('/edit-product/{id}', 'HomeController@editProduct');
Route::post('/update-product/{id}','HomeController@updateProduct');


//all-employee
Route::get('/allemployee', 'HomeController@allEmployee')->name('allEmployee');
Route::post('/insert-employee','HomeController@store');
Route::get('/addemployee', 'HomeController@addEmployee')->name('addEmployee');
Route::get('/delete-employee/{id}', 'HomeController@deleteEmployee');
Route::get('/edit-employee/{id}', 'HomeController@editEmployee');
Route::post('/update-employee/{id}','HomeController@updateEmployee');


//all-category
Route::get('/allcategory', 'HomeController@allCategory')->name('allCategory');
Route::post('/insert-category','HomeController@category');
Route::get('/addcategory', 'HomeController@addCategory')->name('addCategory');
Route::get('/delete-category/{id}', 'HomeController@deleteCategory');
Route::get('/edit-category/{id}', 'HomeController@editCategory');
Route::post('/update-category/{id}','HomeController@updateCategory');
           
//pos-part
Route::get('/pos', 'HomeController@pos')->name('pos');
//pos-cart
Route::post('/add-cart','HomeController@cart');
Route::post('/cart_update/{rowId}','HomeController@cartUpdate');
Route::get('/cart_remove/{rowId}','HomeController@remove');
//invoice
Route::post('/create-invoice','HomeController@invoice');
Route::post('/final-invoice','HomeController@finalInvoice');
//order
Route::get('/pending-orders','HomeController@pending')->name('pending-orders');
Route::get('/view-order/{id}','HomeController@viewOrder');
Route::get('/pos-done/{id}','HomeController@posDone');
Route::get('/success-orders','HomeController@success')->name('success-orders');


// customar part

Route::get('/customar','HomeController@customar')->name('customar');

// expances - part 

Route::get('/addexpances','HomeController@addexpences')->name('addexpences');
Route::post('/insert-expances','HomeController@expances');
Route::get('/allexpances','HomeController@allexpences')->name('allexpences');

// user role

Route::get('/userrole', 'HomeController@adduser')->name('adduser');










