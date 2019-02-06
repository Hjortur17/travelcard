<?php

Auth::routes();

Route::get('/', function () {
	return redirect('/en');
});

Route::get('/{lang}', 'HomeController@index')->name('home');

Route::get('/{lang}/um-okkur', 'AboutController@index')->name('about');
Route::get('/{lang}/sölustaðir', 'AboutController@show')->name('sellers');
Route::post('/hafa-samband', 'AboutController@store');

Route::get('/{lang}/tjaldsvæði', 'CampingController@index')->name('camping');
Route::get('/{lang}/tjaldsvæði/{id}', 'CampingController@show');

Route::get('/{lang}/q-and-a', 'QuestionController@index')->name('qAndA');

Route::get 	('/stjornbord', 'DashboardController@index')->name('dashboard');

Route::get 	('/stjornbord/notendur/bæta', 'UserController@index'); 				// Komið
Route::post 	('/stjornbord/notendur/bæta', 'UserController@store');				// Komið
Route::get 	('/stjornbord/notendur/{id}', 'UserController@show');				// Komið
Route::patch 	('/stjornbord/notendur/{id}', 'UserController@update');				// Komið
Route::delete ('/stjornbord/notendur/{id}', 'UserController@destory');			// Komið

Route::get 	('/stjornbord/tjaldsvæði/bæta', 'CampingController@dashboardIndex');		// Vantar TAG
Route::post 	('/stjornbord/tjaldsvæði/bæta', 'CampingController@store');			// Vantar TAG
Route::get 	('/stjornbord/tjaldsvæði/breyta', 'CampingController@dashboardShow');		// Komið
Route::get 	('/stjornbord/tjaldsvæði/breyta/{id}', 'CampingController@showUpdate');	// Komið
Route::patch 	('/stjornbord/tjaldsvæði/breyta/{id}', 'CampingController@update');		// Komið
Route::delete ('/stjornbord/tjaldsvæði/eyda/{id}', 'CampingController@destory');		// Komið

Route::get 	('/stjornbord/sölustaðir/bæta', 'SellerController@index');			// Komið
Route::post 	('/stjornbord/sölustaðir/bæta', 'SellerController@store');			// Komið
Route::get 	('/stjornbord/sölustaðir/breyta', 'SellerController@show');			// Komið
Route::get 	('/stjornbord/sölustaðir/breyta/{id}', 'SellerController@showUpdate');
Route::patch 	('/stjornbord/sölustaðir/breyta/{id}', 'SellerController@update');
Route::delete ('/stjornbord/sölustaðir/eyda/{id}', 'SellerController@destory');






