<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group([
    'middleware' => ['web', 'auth','guest'],
    'namespace'  => 'Bimmunity\Invoice\Http\Controllers'
],
    function() {

    Route::get('/test', function (){
       return 'asd';
    });
        Route::resource('vendors', 'VendorController');
        Route::resource('customers', 'CustomerController');

        Route::resource('invoices', 'InvoiceController');
        Route::resource('payments', 'PaymentController');
        Route::resource('expenses', 'ExpensesController');

        Route::resource('products', 'ProductController');
        Route::resource('currencies', 'CurrencyController');
        Route::resource('accounts', 'AccountController');

        Route::resource('invoice_statuses', 'InvoiceStatusController');
        Route::resource('payment_methods', 'PaymentMethodController');
        Route::resource('payment_statuses', 'PaymentStatusController');
        Route::resource('expenses_types', 'ExpensesTypeController');
        Route::get('payments/invoiceamount/{idstring}/{tocurrency}','PaymentController@invoiceamount');
        Route::get('payments/currencyname/{id}','PaymentController@currencyname');
        Route::get('invoices/currencyname/{id}','InvoiceController@currencyname');
        Route::get('invoices/getCurrencyConverted/{amount}/{from}/{to}','InvoiceController@getCurrencyConverted');
        Route::get('logout', function (){
            Auth::logout();
            return redirect()->to('/home');
        });
    }
);
