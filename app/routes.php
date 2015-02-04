<?php
//EVENT HANDLERS CAN BE HERE 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('/','WelcomeController');

Route::get('login',array(
		'as' => 'login_page',
		'uses' => 'SessionsController@create'
));

Route::post('login',array(
		'as' => 'login_path',
		'uses' => 'SessionsController@store'
));


Route::get('logout','SessionsController@destroy');


Route::controller('page','PagesController');


Route::resource('users','UsersController');
Route::resource('registration','RegistrationController');
Route::resource('sellers', 'SellersController');
Route::resource('suyers', 'BuyersController');
Route::resource('products', 'ProductsController');

Route::resource('farmer', 'FarmersController');
Route::resource('vendor', 'VendorsController');
Route::resource('admin', 'AdminsController');
Route::resource('supplier', 'SuppliersController');
#THIS IS THE TESTING PART BELOW
	// Event::listen('illuminate.query',function($query){
	// echo '<pre style="margin:200px 80px">';
	// print_r($query);
	// echo '</pre>';
	// });
// DEV