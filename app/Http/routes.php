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
//Xác nhận thanh toán thành công
Route::get('checkout-complete',[
	'as'=>'checkoutComplete',
	'uses'=>'HomeController@checkoutComplete'
]);
//Thanh Toán
Route::get('checkout-step-1',[
	'as'=>'CheckoutStep1',
	'uses'=>'HomeController@checkoutStep1'
]);
Route::post('checkout-step-1',[
	'as'=>'post.CheckoutStep1',
	'uses'=>'HomeController@postCheckoutStep1'
]);
Route::get('checkout-step-2',[
	'as'=>'CheckoutStep2',
	'uses'=>'HomeController@checkoutStep2'
]);
Route::get('checkout-step-3',[
	'as'=>'CheckoutStep3',
	'uses'=>'HomeController@checkoutStep3'
]);
Route::get('checkout-step-4',[
	'as'=>'CheckoutStep4',
	'uses'=>'HomeController@checkoutStep4'
]);
//Mua hàng
Route::get('add-to-cart/{id}/{alias}',[
	'as'=>'addToCart', 
	'uses'=>'HomeController@addToCart'
]);
//Xóa hàng đã mua
Route::get('remove-to-cart/{id}',[
	'as'=>'removeToCart',
	'uses'=>'HomeController@removeToCart'
]);
//Cập nhật giỏ hàng
Route::get('update-to-cart/{id}/{qty}',[
	'as'=>'updateToCart',
	'uses'=>'HomeController@updateToCart'
]);
Route::get('/','HomeController@index');
//Danh sách sản phẩm theo Grid
Route::get('category-grid/{id}/{alias}',[
	'uses' => 'HomeController@category_grid',
	'as'	=> 'category-grid'
]);
//Danh sách sản phẩm theo List
Route::get('category-list/{id}/{alias}',[
	'uses' => 'HomeController@category_list',
	'as'	=> 'category-list'
]);
//Thông tin sản phẩm
Route::get('product/{id}/{alias}',[
	'uses' => 'HomeController@product',
	'as'	=> 'product'
]);
//Liên hệ
Route::get('about-us',[
	'uses'	=>	'HomeController@about_us',
	'as'	=>	'about-us'
]);
//Giỏ hàng
Route::get('cart',[
	'uses'	=>	'HomeController@cart',
	'as'	=>	'cart'
]);
//Phân quyền user
Route::group(['middleware'=>'user'],function(){
	Route::get('account-dashboard',[
	'uses'	=>	'HomeController@account_dashboard',
	'as'	=>	'account-dashboard'
	]);
	Route::get('account-profile/{id}',[
		'uses'	=>	'HomeController@account_profile',
		'as'	=>	'account-profile'
	]);
	Route::post('account-profile/{id}',[
		'uses'	=>	'HomeController@postAccountProfile',
		'as'	=>	'account-profile'
	]);
	Route::get('account-address',[
		'uses'	=>	'HomeController@account_address',
		'as'	=>	'account-address'
	]);
	Route::get('account-all-order',[
		'uses'	=>	'HomeController@account_order',
		'as'	=>	'account-all-order'
	]);
});

//Auth người dùng
Route::post('user-login',[
	'uses'	=>	'AccountController@postLogin',
	'as'	=>	'user-login'
]);
Route::get('user-logout',[
	'uses'	=>	'AccountController@getLogout',
	'as'	=>	'user-logout'
]);
Route::post('user-register',[
	'uses'	=>	'AccountController@postRegister',
	'as'	=>	'user-register'
]);


//Quản trị Admin
Route::group(['prefix'=>'admin'],function(){
	Route::get('login',[
		'uses'=>'UserController@getLogin',
		'as'=>'login'
	]);
	Route::post('login',[
		'uses'=>'UserController@postLogin',
		'as'=>'login'
	]);
	Route::get('logout',[
		'uses'=>'UserController@getLogout',
		'as'=>'logout'
	]);

	Route::group(['middleware'=>'admin'],function(){
		Route::resource('category','CategoryController');
		Route::resource('product','ProductController');
		Route::resource('introduce','IntroduceController');
		Route::resource('slide','SlideController');
		Route::resource('user','UserController');
		Route::resource('introduce','IntroduceController');
		Route::get('dashboard',[
			'uses'=>'DashboardController@getDashboard',
			'as'	=>	'dashboard'
		]);
	});
});
