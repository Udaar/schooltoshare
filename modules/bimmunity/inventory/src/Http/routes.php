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

Route::group([
    'middleware' => ['web', 'auth','guest'],
    'namespace'  => 'Bimmunity\Inventory\Http\Controllers'
],
function() {
    Route::resource('items', 'ItemController');

    Route::resource('stores', 'StoreController');

    Route::resource('inventories', 'InventoryController');

    Route::resource('companies', 'CompanyController');

    Route::resource('accountTypes', 'AccountTypeController');

    Route::resource('banks', 'BankController');

    Route::resource('companyAccounts', 'CompanyAccountController');

    Route::resource('myCompanies', 'MyCompanyController');

    Route::resource('packings', 'PackingController');

    Route::resource('financeAccounts', 'FinanceAccountController');

    Route::resource('inOrders', 'InOrderController');

    Route::resource('inOrderItems', 'InOrderItemController');

    Route::resource('outOrders', 'OutOrderController');

    Route::get('outOrderItems/search', array('as' => 'outOrderItems.search', 'uses' =>'OutOrderItemController@search'));

    Route::post('outOrderItems/search_result', array('as' => 'outOrderItems.search_result', 'uses' =>'OutOrderItemController@search_result'));

    Route::resource('outOrderItems', 'OutOrderItemController');

    // order Payments ajax Functions
    Route::get('orderPayments/create/ajax_company_account','OrderPaymentController@ajax_company_account');

    Route::get('orderPayments/create/get_order_payment','OrderPaymentController@get_order_payment');

    Route::resource('orderPayments', 'OrderPaymentController');

    Route::resource('itemCosts', 'ItemCostController');

    // purchase orders Functions
    Route::patch('inOrderItems/update_order_items/{id}', array('as' => 'inOrderItems.update_order_items', 'uses' =>'InOrderItemController@update_order_items'));

    Route::post('/inOrders/{id}/edit', array('as' => 'inOrders.edit', 'uses' =>'InOrderController@edit'));

    Route::post('/inOrders/sales_action/{id}', array('as' => 'inOrders.sales_action', 'uses' =>'InOrderController@sales_action'));

    Route::get('/inOrders/ajax_get_approved_in_orders/data/all','InOrderController@ajax_get_approved_in_orders');

    Route::get('/inOrders/ajax_get_unapproved_in_orders/data/all','InOrderController@ajax_get_unapproved_in_orders');

    Route::get('inOrderItems/create/ajax_current_item_cost','InOrderItemController@ajax_current_item_cost');

    // Sales orders Functions
    Route::patch('outOrderItems/update_order_items/{id}', array('as' => 'outOrderItems.update_order_items', 'uses' =>'OutOrderItemController@update_order_items'));

    Route::get('/outOrders/ajax_get_approved_out_orders/data/all','OutOrderController@ajax_get_approved_out_orders');

    Route::get('/outOrders/ajax_get_unapproved_out_orders/data/all','OutOrderController@ajax_get_unapproved_out_orders');

    Route::post('/outOrders/sales_action/{id}', array('as' => 'outOrders.sales_action', 'uses' =>'OutOrderController@sales_action'));

    // sales order ajax Functions
    Route::get('outOrderItems/create/ajax_in_order_items','OutOrderItemController@ajax_in_order_items');

    Route::get('outOrderItems/create/ajax_current_item_cost','OutOrderItemController@ajax_current_item_cost');


    ////////////////////////////////////////////// Start Finance Functions ///////////////////////////////////////////////////////////////////////////

    Route::get('finance/approved_in_order_finance', 'FinanceController@approved_in_order_finance')->name('approved_in_order_finance');

    Route::get('finance/not_approved_in_order_finance', 'FinanceController@not_approved_in_order_finance')->name('not_approved_in_order_finance');

    Route::get('finance/approved_out_order_finance', 'FinanceController@approved_out_order_finance')->name('approved_out_order_finance');

    Route::get('finance/not_approved_out_order_finance', 'FinanceController@not_approved_out_order_finance')->name('not_approved_out_order_finance');

    Route::get('/finance/approved_in_order_finance/{id}', ['uses' =>'FinanceController@approved_in_order_finance_item']);

    Route::get('/finance/approved_out_order_finance/{id}', 'FinanceController@approved_out_order_finance_item');

    Route::get('/finance/approved_in_order_finance/{id}', ['uses' =>'FinanceController@approved_in_order_finance_item']);

    Route::get('/finance/approved_out_order_finance/{id}', 'FinanceController@approved_out_order_finance_item');

    Route::get('/finance/approved_in_order_finance/data/all', 'FinanceController@getJson');

    Route::get('/finance/ajax_get_approved_in_orders/data/all','FinanceController@ajax_get_approved_in_orders');

    Route::get('/finance/ajax_get_unapproved_in_orders/data/all','FinanceController@ajax_get_unapproved_in_orders');

    Route::get('/finance/ajax_get_approved_out_orders/data/all','FinanceController@ajax_get_approved_out_orders');

    Route::get('/finance/ajax_get_unapproved_out_orders/data/all','FinanceController@ajax_get_unapproved_out_orders');

    Route::get('/finance/approved_in_order_show/{id}', array('as' => 'finance.approved_in_order_show', 'uses' =>'FinanceController@approved_in_order_show'));

    Route::get('/finance/approved_out_order_show/{id}', array('as' => 'finance.approved_out_order_show', 'uses' =>'FinanceController@approved_out_order_show'));

    Route::post('/finance/finance_action/{id}', array('as' => 'finance.finance_action', 'uses' =>'FinanceController@finance_action'));

    Route::post('/finance/finance_action1/{id}', array('as' => 'finance.finance_action1', 'uses' =>'FinanceController@finance_action1'));

    ////////////////////////////////////////////// End Finance Functions //////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////// Start Qc Functions ///////////////////////////////////////////////////////////////////////////

    Route::get('qc/approved_in_order_qc', 'QcController@approved_in_order_qc')->name('approved_in_order_qc');

    Route::get('qc/not_approved_in_order_qc', 'QcController@not_approved_in_order_qc')->name('not_approved_in_order_qc');

    Route::get('qc/approved_out_order_qc', 'QcController@approved_out_order_qc')->name('approved_out_order_qc');

    Route::get('qc/not_approved_out_order_qc', 'QcController@not_approved_out_order_qc')->name('not_approved_out_order_qc');

    Route::get('/qc/approved_in_order_qc/{id}', ['uses' =>'QcController@approved_in_order_qc_item']);

    Route::get('/qc/approved_out_order_qc/{id}', 'QcController@approved_out_order_qc_item');

    Route::get('/qc/approved_in_order_qc/{id}', ['uses' =>'QcController@approved_in_order_qc_item']);

    Route::get('/qc/approved_out_order_qc/{id}', 'QcController@approved_out_order_qc_item');

    Route::get('/qc/approved_in_order_qc/data/all', 'QcController@getJson');

    Route::get('/qc/ajax_get_approved_in_orders/data/all','QcController@ajax_get_approved_in_orders');

    Route::get('/qc/ajax_get_unapproved_in_orders/data/all','QcController@ajax_get_unapproved_in_orders');

    Route::get('/qc/approved_in_order_show/{id}', array('as' => 'qc.approved_in_order_show', 'uses' =>'QcController@approved_in_order_show'));

    Route::post('/qc/qc_action/{id}', array('as' => 'qc.qc_action', 'uses' =>'QcController@qc_action'));

    ////////////////////////////////////////////// End Qc Functions ///////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////// Start Packing Functions ////////////////////////////////////////////////////////////////////////////

    Route::get('packing/approved_out_order_packing', 'PackingController@approved_out_order_packing')->name('approved_out_order_packing');

    Route::get('packing/not_approved_out_order_packing', 'PackingController@not_approved_out_order_packing')->name('not_approved_out_order_packing');

    Route::get('/packing/approved_out_order_packing/{id}', 'PackingController@approved_out_order_packing_item');

    Route::get('/packing/approved_out_order_packing/{id}', 'PackingController@approved_out_order_packing_item');

    Route::post('/packing/packing_action/{id}', array('as' => 'packing.packing_action', 'uses' =>'PackingController@packing_action'));

    ////////////////////////////////////////////// End Packing Functions //////////////////////////////////////////////////////////////////////////////

    Route::resource('itemBuyPrices', 'ItemBuyPriceController');

    Route::resource('acceptedRecords', 'AcceptedRecordsController');
}
);
