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

		Route::get('gramPanchayatAssign', 'AccountController@gramPanchayatAssign')->name('admin.account.gramPanchayatAssign'); 
		Route::get('DistrictBlockgramPanchayatAssign', 'AccountController@DistrictBlockgramPanchayatAssign')->name('admin.account.DistrictBlockgramPanchayatAssign'); 
		Route::post('DistrictBlockgramPanchayatAssignStore', 'AccountController@DistrictBlockgramPanchayatAssignStore')->name('admin.Master.DistrictBlockgramPanchayatAssignStore');
		Route::get('DistrictBlockgramPanchayatAssignDelete/{id}', 'AccountController@DistrictBlockgramPanchayatAssignDelete')->name('admin.Master.DistrictBlockgramPanchayatAssignDelete'); 
		
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

	    Route::get('gram-panchayat', 'MasterController@gramPanchayat')->name('admin.Master.gram.panchayat');  
	    Route::post('gram-Panchayat-Store{id?}', 'MasterController@gramPanchayatStore')->name('admin.Master.gran.panchayat.store');
	    Route::get('gram-panchayat-Table', 'MasterController@gramPanchayatTable')->name('admin.Master.gram.panchayat.table');
	    Route::get('gram-panchayat-edit/{id}', 'MasterController@gramPanchayatEdit')->name('admin.Master.gram.panchayat.edit');	   
	    Route::get('gram-panchayat-delete/{id}', 'MasterController@gramPanchayatDelete')->name('admin.Master.gram.panchayat.delete');	   
	   
	    Route::get('transaction-type', 'MasterController@transactionType')->name('admin.Master.transaction.type');  
	    Route::post('transaction-type-store', 'MasterController@transactionTypeStore')->name('admin.Master.transaction.type.store');  
	    Route::get('transaction-type-edit/{id}', 'MasterController@transactionTypeEdit')->name('admin.Master.transaction.type.edit');  
	    Route::post('transaction-type-update/{id}', 'MasterController@transactionTypeUpdate')->name('admin.Master.transaction.type.update');  
	    Route::get('transaction-type-delete/{id}', 'MasterController@transactionTypeDelete')->name('admin.Master.transaction.type.delete');  
	    


	    //-village--//
	    Route::get('village', 'MasterController@village')->name('admin.Master.village');	   
	    Route::post('village-store{id?}', 'MasterController@villageStore')->name('admin.Master.village.store');	   
	   
	    Route::get('villageTable', 'MasterController@villageTable')->name('admin.Master.villageTable');
	    Route::get('village-edit/{id}', 'MasterController@villageEdit')->name('admin.Master.village.edit');
	    
	    Route::get('village-delete/{id}', 'MasterController@villageDelete')->name('admin.Master.village.delete');
	    
	    	 
	    //-----------------onchange-----------------------------//
	    Route::get('stateWiseDistrict', 'MasterController@stateWiseDistrict')->name('admin.Master.stateWiseDistrict');   
	    

	    Route::get('DistrictWiseBlock/{print_condition?}', 'MasterController@DistrictWiseBlock')->name('admin.Master.DistrictWiseBlock');
	     

	    Route::get('BlockWiseGramPanchayat', 'MasterController@BlockWiseGramPanchayat')->name('admin.Master.BlockWiseGramPanchayat');

	    Route::get('GramPanchayatWiseVillage', 'MasterController@GramPanchayatWiseVillage')->name('admin.Master.GramPanchayatWiseVillage');

	    Route::get('villageWiseShg', 'MasterController@villageWiseShg')->name('admin.Master.villageWiseShg');

	    Route::get('shgWiseMember', 'MasterController@shgWiseMember')->name('admin.Master.shgWiseMember'); 
	   

	   
	     
	});
	Route::group(['prefix' => 'shg-details'], function() {


		 Route::get('self-help-group', 'SHGDetailController@selfHelpGroup')->name('admin.shg.detail.selfhelpgroup'); 
		 Route::get('self-help-group-list', 'SHGDetailController@selfHelpGroupList')->name('admin.shg.detail.selfhelpgroup.list'); 
		 Route::get('self-help-group-add/{id?}', 'SHGDetailController@selfHelpGroupAddForm')->name('admin.sgh.selfhelpgroup.add');
		 Route::get('self-help-group-edit/{id}', 'SHGDetailController@selfHelpGroupEdit')->name('admin.shg.detail.selfhelpgroup.edit'); 

		 Route::get('self-help-group-addmember/{id?}', 'SHGDetailController@selfHelpGroupAddMember')->name('admin.sgh.selfhelpgroup.add.member');
		 Route::post('add-new-shg-store/{id?}', 'SHGDetailController@addNewShgStore')->name('admin.add.new.shg.store'); 
		 Route::get('add-member/{id}', 'SHGDetailController@selfHelpGroupAdd')->name('admin.shg.detail.selfhelpgroup.add'); 
		 Route::get('self-help-group-view-member/{id}', 'SHGDetailController@selfHelpGroupViewMember')->name('admin.shg.detail.selfhelpgroup.view.member'); 
		 Route::post('self-help-group-store-member/{id}', 'SHGDetailController@selfHelpGroupStoreMember')->name('admin.shg.detail.selfhelpgroup.store.member'); 
		 Route::get('self-help-group-edit-member/{id}/{selfHelpGroupid}', 'SHGDetailController@selfHelpGroupEditMember')->name('admin.shg.detail.selfhelpgroup.edit.member'); 
		 Route::post('self-help-group-update-member/{id}', 'SHGDetailController@selfHelpGroupUpdateMember')->name('admin.shg.detail.selfhelpgroup.update.member');

		 Route::get('shgmemberdetail', 'SHGDetailController@shgmemberdetail')->name('admin.shgmemberdetail'); 
		 Route::get('shgmemberdetailtable', 'SHGDetailController@shgmemberdetailtable')->name('admin.shgmemberdetailtable'); 
		 Route::get('shgmemberdetailaddForm/{id?}', 'SHGDetailController@shgmemberdetailaddForm')->name('admin.shgmemberdetailaddForm'); 
		 Route::get('shgmemberdetailedit/{id?}', 'SHGDetailController@shgmemberdetailedit')->name('admin.shgmemberdetailedit');

		 Route::get('shgmemberfamilydetail', 'SHGDetailController@shgmemberfamilydetail')->name('admin.shgmemberfamilydetail');  
		 Route::get('shgmemberfamilytable', 'SHGDetailController@shgmemberfamilytable')->name('admin.shgmemberfamilytable');  
		 Route::get('shgmemberfamilyaddForm/{id?}', 'SHGDetailController@shgmemberfamilyaddForm')->name('admin.shgmemberfamilyaddForm');  
		 Route::post('shgmemberfamilyStore/{id?}', 'SHGDetailController@shgmemberfamilyStore')->name('admin.shgmemberfamilyStore');  
		 Route::get('shgmemberfamilyEdit/{id?}', 'SHGDetailController@shgmemberfamilyEdit')->name('admin.shgmemberfamilyEdit');  


		 
		 
	});

	Route::group(['prefix' => 'assets'], function() {
		 Route::get('shg-assets', 'SHGDetailController@shgAssets')->name('admin.shg.assets');
		 Route::get('shg-assets-table', 'SHGDetailController@shgAssetsTable')->name('admin.shg.assets.table');
		 Route::get('shg-assets-add/{id?}', 'SHGDetailController@shgAssetsAdd')->name('admin.shg.assets.add');
		 Route::post('shg-assets-store/{id?}', 'SHGDetailController@shgAssetsStore')->name('admin.shg.assets.store');
		 
		  
	});

	Route::group(['prefix' => 'cashbook'], function() {
		  
		 Route::get('shg-cashbook', 'CashbookController@shgCashbook')->name('admin.shg.cashbook'); 
		 Route::post('shg-cashbook-store', 'CashbookController@shgCashbookStore')->name('admin.shg.cashbook.store'); 
		 Route::get('shg-cashbook-table', 'CashbookController@shgCashbookTable')->name('admin.shg.cashbook.table'); 
		 
		  
	});
	
	
	Route::group(['prefix' => 'report'], function() {
		 Route::get('shg-list', 'ReportController@shgList')->name('admin.report.shglist'); 
		 Route::post('shg-list-generate', 'ReportController@shgListGenerate')->name('admin.report.shglist.generate');
		  
		 Route::get('shg-member', 'ReportController@shgMember')->name('admin.report.self.HelpGroupreport'); 
		 Route::post('shg-member-generate', 'ReportController@shgMemberGenerate')->name('admin.report.self.HelpGroupreport.generate');


		 Route::get('shg-member-family', 'ReportController@shgMemberfamily')->name('admin.report.shgMemberfamily'); 
		 Route::post('shg-member-family-generate', 'ReportController@shgMemberfamilyGenerate')->name('admin.report.shgMemberfamily.generate'); 
		 
		 
		  
	});
    
 });