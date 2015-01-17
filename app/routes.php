<?php

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

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/invoices/{id}/pdf', array('as' => 'invoicePDF', 'uses' => 'InvoicesController@makePDF'));

Route::get('/shen', function(){

	

});

Route::resource('clients', 'ClientsController');
Route::resource('contacts', 'ContactsController');
Route::resource('items', 'ItemsController');
Route::resource('invoices', 'InvoicesController');
Route::resource('invoice_services', 'InvoiceServicesController');