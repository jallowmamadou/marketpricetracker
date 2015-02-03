<?php
Event::listen('Universal.Creation.Events.TenantCreated','NotificationsController@store');
Event::listen('Universal.Creation.Events.RentPaid','RentPaysController@store');
Event::listen('Universal.Creation.Events.DailyPaid','RentPaysController@store');
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
// Route::get('/', 'HomeController@showWelcome');
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
Route::get('download',function(){
	$file = $_GET['file'];
	return Response::download($file);
});
Route::get('view', function()
{
	$file = $_GET['file'];
	return Redirect::to($file);
});

// GROUP ROUTES

Route::group(array('before'=>'auth'), function(){
// dev
Route::resource('admin','AdminController');
Route::resource('admin.staffs','StaffsController');
Route::resource('admin.plots','PlotsController');
Route::resource('plots','PlotsController');
Route::resource('agents','AgentsController');
Route::resource('staffs','StaffsController');
Route::resource('payments','PaymentsController');
Route::resource('customers.payments','PaymentsController');
Route::resource('cocuments', 'DocumentsController');
Route::resource('customers', 'CustomersController');
Route::resource('agents.customers', 'CustomersController');
Route::resource('search', 'SearchController');
Route::resource('partners', 'PartnersController');


Route::get('transactions/checkdate',array('as'=>'checkdate','uses'=>'TransactionsController@getCheckdate'));
Route::resource('transactions', 'TransactionsController');

Route::resource('paying', 'DailyTransactionsController');
Route::resource('prospectives', 'ProspectivesController');

Route::get('tenants/vacate/{id}/{hid}',array('as'=>'vacate','uses'=>'TenantsController@getVacate'));
Route::get('tenants/kill/{id}',array('as'=>'kill','uses'=>'TenantsController@getKill'));
Route::resource('tenants.rents-paid','TenantsController@getRents');
Route::resource('tenants', 'TenantsController');

Route::resource('tenants.payments', 'TenanPaymentsController');

Route::resource('land-lords.rents-paid','LandlordsController@getRents');
Route::resource('land-lords', 'LandlordsController');

Route::resource('compounds', 'CompoundsController');
Route::resource('houses', 'HousesController');
Route::resource('notifications', 'NotificationsController');
Route::get('data-entry', array('as'=>'data_entry', 'uses'=>'PagesController@showData'));
Route::resource('estates', 'EstatesController');
Route::resource('estates.plots', 'EstatesController');
Route::resource('rent-pays', 'RentPaysController');
Route::resource('luwas', 'LuwasController');
});
#THIS IS THE TESTING PART BELOW
// Event::listen('illuminate.query',function($query){
// echo '<pre style="margin:200px 80px">';
// print_r($query);
// echo '</pre>';
// });

// DEV

Route::resource('users','UsersController');