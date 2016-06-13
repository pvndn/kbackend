<?php

Route::group([ 'prefix' => 'k-admin' ], function () {
	Route::group([ 'middleware' => ['auth:web_users'] ], function () {
		Route::get('/', [ 'as' => 'k-admin.dashboard', 'uses' => 'Admin\AdminsController@dashboard' ]);

		Route::resource('/category', 'Admin\CategoriesController@index');




		Route::get('/logout', [ 'as' => 'admin.logout', 'uses' => 'Users\AuthController@logout' ]);

		Route::get('/register', [ 'as' => 'admin.register', 'uses' => 'Users\AuthController@getRegister' ]);
		Route::post('/register', [ 'as' => 'admin.doregister', 'uses' => 'Users\AuthController@register' ]);

	});

	Route::get('/login', [ 'as' => 'admin.login', 'uses' => 'Users\AuthController@index' ]);
	Route::post('/login', [ 'as' => 'admin.dologin', 'uses' => 'Users\AuthController@login' ]);

	Route::get('/password/reset/{token?}', [ 'as' => 'admin.forgot', 'uses' => 'Users\PasswordController@showResetForm' ]);
	Route::post('/password/email', [ 'as' => 'admin.sendmail', 'uses' => 'Users\PasswordController@sendResetLinkEmail' ]);
	Route::post('/password/reset', [ 'as' => 'admin.doforgot', 'uses' => 'Users\PasswordController@reset' ]);
});

Route::get('/', function () {
    return view('welcome');
});




Route::group([ 'middleware' => ['auth:web_customers'] ], function () {
	Route::get('/customer', function () {
	    return 'customer';
	});
});


Route::auth();
Route::get('/home', 'HomeController@index');





