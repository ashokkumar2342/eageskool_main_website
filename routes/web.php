<?php

Route::get('/', function () {
    return redirect()->route('front.index');
 
});

Route::get('index', 'Front\HomeController@index')->name('front.index');
Route::get('about', 'Front\HomeController@about')->name('front.about');
Route::get('service', 'Front\HomeController@service')->name('front.service');
Route::get('pricing', 'Front\HomeController@pricing')->name('front.pricing');
Route::get('contact', 'Front\HomeController@contact')->name('front.contact');
Route::get('faq', 'Front\HomeController@faqs')->name('front.faqs');
Route::get('book-a-demo', 'Front\HomeController@bookAdemo')->name('front.bookAdemo');
Route::post('book-a-demo-store', 'Front\HomeController@bookAdemoStore')->name('front.bookAdemo.store');
Route::get('support', 'Front\HomeController@support')->name('front.support');
Route::post('support-post/{id?}', 'Front\HomeController@supportPost')->name('front.support.post');
Route::get('support-token/{id?}', 'Front\HomeController@supportToken')->name('front.support.token');





