<?php

use App\Http\Controllers\Admin\reportGenerateBarcode;
//registration start

//registration end 

Route::get('login', 'Auth\LoginController@login')->name('admin.login'); 
Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout.get');
Route::get('refreshcaptcha', 'Auth\LoginController@refreshCaptcha')->name('admin.refresh.captcha');
Route::post('login-post', 'Auth\LoginController@loginPost')->name('admin.login.post'); 

Route::group(['middleware' => 'admin'], function() {
	Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

	Route::prefix('account')->group(function () {
	    Route::get('form', 'AccountController@form')->name('admin.account.form');
	    Route::post('store', 'AccountController@store')->name('admin.account.post');
		Route::get('list', 'AccountController@index')->name('admin.account.list');
		Route::get('edit/{account}', 'AccountController@edit')->name('admin.account.edit');
		Route::post('update/{account}', 'AccountController@update')->name('admin.account.edit.post');
		Route::get('delete/{account}', 'AccountController@destroy')->name('admin.account.delete');
		
	});
	
		

    Route::group(['prefix' => 'Master'], function() {
    	//-states-//
	    Route::get('/', 'MasterController@index')->name('admin.Master.index');	   
	    Route::post('Store/{id?}', 'MasterController@store')->name('admin.Master.store');	   
	    Route::get('Edit{id}', 'MasterController@edit')->name('admin.Master.edit');
	    Route::get('Delete{id}', 'MasterController@delete')->name('admin.Master.delete');
        //-districts-//
	});
	

    
 });