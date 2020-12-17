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
    return view('welcome');
});


Auth::routes();

Route::any('/home', 'HomeController@index')->name('home');


Route::get('/tbl_property/{id}','PropertyController@show');
Route::get('/tbl_property2/{id}','PropertyController2@show');

Route::get('/tbl_customer_purchase','PurchaseController@store');
Route::get('/tbl_customer2_purchase','Purches2Controller@edit');
Route::get('/tbl_customer_payment', 'PaymentController@store');
Route::get('/tbl_siz_months', 'SIxmonthController@store');
Route::get('/tbl_four_year', 'FouryearController@store');

Route::get('/tbl_customer_add', 'CustomerController@create');

//Route::post('/tbl_customer_add', 'CustomerController@store');
Route::get('/tbl_property2','PropertyController2@store');

Route::get('/tbl_project_add', 'ProjectController@create');
Route::get('/add_block_price', 'ProjectController@testing');

Route::resource('tbl_customer', 'CustomerController');
Route::resource('tbl_customer_purchase', 'PurchaseController');
Route::resource('tbl_customer_payment', 'PaymentController');
Route::resource('tbl_customer2_purchase', 'Purches2Controller');
Route::resource('tbl_siz_months', 'SIxmonthController');
Route::resource('tbl_four_year', 'FouryearController');


Route::resource('tbl_project_discount', 'DiscountController');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');


Route::resource('tbl_project', 'ProjectController');
Route::resource('tbl_property', 'PropertyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
