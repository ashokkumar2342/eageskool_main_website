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

		Route::get('DistrictsAssign', 'AccountController@DistrictsAssign')->name('admin.account.DistrictsAssign'); 
		Route::get('StateDistrictsSelect', 'AccountController@StateDistrictsSelect')->name('admin.account.StateDistrictsSelect'); 
		Route::post('DistrictsAssignStore', 'AccountController@DistrictsAssignStore')->name('admin.Master.DistrictsAssignStore');
		Route::get('DistrictsAssignDelete/{id}', 'AccountController@DistrictsAssignDelete')->name('admin.Master.DistrictsAssignDelete');

		Route::get('BlockAssign', 'AccountController@BlockAssign')->name('admin.account.BlockAssign'); 
		Route::get('DistrictBlockAssign', 'AccountController@DistrictBlockAssign')->name('admin.account.DistrictBlockAssign'); 
		Route::post('DistrictBlockAssignStore', 'AccountController@DistrictBlockAssignStore')->name('admin.Master.DistrictBlockAssignStore');
		Route::get('DistrictBlockAssignDelete/{id}', 'AccountController@DistrictBlockAssignDelete')->name('admin.Master.DistrictBlockAssignDelete');
		
	});
	
		

        Route::group(['prefix' => 'Master'], function() {
        	//-states-//
    	    Route::get('/', 'MasterController@index')->name('admin.Master.index');	   
    	    Route::post('Store/{id?}', 'MasterController@store')->name('admin.Master.store');	   
    	    Route::get('Edit{id}', 'MasterController@edit')->name('admin.Master.edit');
    	    Route::get('Delete{id}', 'MasterController@delete')->name('admin.Master.delete');
            //-districts-//
    	    Route::get('Districts', 'MasterController@districts')->name('admin.Master.districts');	   
    	    Route::post('Districts-Store{id?}', 'MasterController@districtsStore')->name('admin.Master.districtsStore');	   
    	    Route::get('DistrictsTable', 'MasterController@DistrictsTable')->name('admin.Master.DistrictsTable');
    	    Route::get('Districts-Edit/{id}', 'MasterController@districtsEdit')->name('admin.Master.districtsEdit');
    	    Route::get('Districts-delete/{id}', 'MasterController@districtsDelete')->name('admin.Master.districtsDelete');
    	   
    	    Route::get('BlockMCS', 'MasterController@BlockMCS')->name('admin.Master.blockmcs');  
    	    Route::post('BlockMCSStore{id?}', 'MasterController@BlockMCSStore')->name('admin.Master.BlockMCSStore');	   
    	    Route::get('BlockMCSEdit/{id}', 'MasterController@BlockMCSEdit')->name('admin.Master.BlockMCSEdit');
    	    Route::get('BlockMCSTable', 'MasterController@BlockMCSTable')->name('admin.Master.BlockMCSTable');
    	    Route::get('BlockMCSDelete/{id}', 'MasterController@BlockMCSDelete')->name('admin.Master.BlockMCSDelete');
    	    	 
    	    //-----------------onchange-----------------------------//
    	    Route::get('stateWiseDistrict', 'MasterController@stateWiseDistrict')->name('admin.Master.stateWiseDistrict');   
    	    

    	    Route::get('DistrictWiseBlock/{print_condition?}', 'MasterController@DistrictWiseBlock')->name('admin.Master.DistrictWiseBlock');
    	     


    	   
    	     
    	});

	Route::group(['prefix' => 'booking'], function() {
	    Route::get('demo-request-list', 'BookingController@demoRequestList')->name('admin.booking.demo.request.list');	   
	    Route::post('demo-request-list-show', 'BookingController@demoRequestListShow')->name('admin.booking.demo.request.list.show');	   
	    Route::get('demo-assign/{booking_id}', 'BookingController@demoAssign')->name('admin.booking.demo.assign');	   
	    Route::get('demo-assign-save/{booking_id}/{user_id}', 'BookingController@demoAssignSave')->name('admin.booking.demo.assign.save');	   
	});

	Route::group(['prefix' => 'support'], function() {
	    Route::get('index', 'SupportController@index')->name('admin.support.index');  
	    Route::post('show', 'SupportController@show')->name('admin.support.show');  
	});
	

    
 });