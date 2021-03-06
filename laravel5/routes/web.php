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
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/customers', 'CustomerController@getAllCustomers');

Route::get('/customers/{id}', 'CustomerController@getCustomer');

Route::get('/newcustomer', function(){
  return view('customers/newcustomer');
});
