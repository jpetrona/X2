<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('user/login');
});

Route::group(['prefix'=>'admin'],function(){
	Route::get('/','Admin\HomeController@index')->name('admin.home');
	// @Login
	Route::get('login','Admin\AuthController@getLogin')->name('admin.login');
	Route::post('login','Admin\AuthController@postLogin');
	// @Register
	Route::get('register','Admin\AuthController@getRegister')->name('admin.register');
	Route::post('register','Admin\AuthController@postRegister');
	// @Menu_Banner
	Route::get('menu','Admin\MenuBannerController@index')->name('admin.menu.index');
	Route::post('menu','Admin\MenuBannerController@store')->name('admin.menu.store');
	Route::get('menu/create','Admin\MenuBannerController@create')->name('admin.menu.create');
	Route::get('menu/{id}/edit','Admin\MenuBannerController@edit')->name('admin.menu.edit');
	Route::put('menu/{id}','Admin\MenuBannerController@update')->name('admin.menu.update');
	Route::delete('menu/{id}','Admin\MenuBannerController@destroy')->name('admin.menu.destroy');
	// @Network
	Route::get('network','Admin\NetworkController@index')->name('admin.network.index');
	Route::post('network','Admin\NetworkController@store')->name('admin.network.store');
	Route::get('network/create','Admin\NetworkController@create')->name('admin.network.create');
	Route::get('network/{id}/edit','Admin\NetworkController@edit')->name('admin.network.edit');
	Route::put('network/{id}','Admin\NetworkController@update')->name('admin.network.update');
	Route::delete('network/{id}','Admin\NetworkController@destroy')->name('admin.network.destroy');
	// @Offers
	Route::get('offer/{menuId}','Admin\OfferController@index')->name('admin.offer.index');
	Route::post('offer/{menuId}','Admin\OfferController@store')->name('admin.offer.store');
	Route::get('offer/{menuId}/create','Admin\OfferController@create')->name('admin.offer.create');
	Route::get('offer/{menuId}/{id}/edit','Admin\OfferController@edit')->name('admin.offer.edit');
	Route::put('offer/{menuId}/{id}','Admin\OfferController@update')->name('admin.offer.update');
	Route::delete('offer/{menuId}/{id}','Admin\OfferController@destroy')->name('admin.offer.destroy');
	// @OfferWall
	Route::get('offerwall','Admin\OfferwallController@index')->name('admin.offerwall.index');
	Route::post('offerwall','Admin\OfferwallController@store')->name('admin.offerwall.store');
	Route::get('offerwall/create','Admin\OfferwallController@create')->name('admin.offerwall.create');
	Route::get('offerwall/{id}/edit','Admin\OfferwallController@edit')->name('admin.offerwall.edit');
	Route::put('offerwall/{id}','Admin\OfferwallController@update')->name('admin.offerwall.update');
	Route::delete('offerwall/{id}','Admin\OfferwallController@destroy')->name('admin.offerwall.destroy');
	// @Member
	Route::get('members','Admin\MembersController@index')->name('admin.members.index');
	Route::get('members/create','Admin\MembersController@create')->name('admin.members.create');
	Route::get('members/{id}/edit','Admin\MembersController@edit')->name('admin.members.edit');
	Route::post('members','Admin\MembersController@store')->name('admin.members.store');
	Route::put('members/{id}','Admin\MembersController@update')->name('admin.members.update');
	Route::delete('members/{id}','Admin\MembersController@destroy')->name('admin.members.destroy');
	Route::get('members/{id}/login','Admin\MembersController@login')->name('admin.members.login');
	
});
Route::group(['prefix'=>'user'],function(){
	Route::get('login','User\AuthController@getLogin')->name('user.login');
	Route::post('login','User\AuthController@postLogin');
	Route::get('register','User\AuthController@getRegister')->name('user.register');
	Route::post('register','User\AuthController@postRegister');
	Route::get('account','User\AccountController@account')->name('user.account');
});
Route::get('go/{aff_sub_rand}/{rand_id}','GoController@index')->name('go');