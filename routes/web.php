<?php

Auth::routes 	(['verify' => true]);

Route::get 	('/', function () {return redirect('/en');});

Route::get 	('/{lang}', 'HomeController@index')->name('home');

Route::get 	('/{lang}/um-okkur', 'AboutController@index')->name('about');
Route::get 	('/{lang}/um-okkur/sölustaðir', 'AboutController@showSellers')->name('sellers');
// Route::get 	('/{lang}/um-okkur/gjaldmiðlar', 'AboutController@showCurrency')->name('currency');
Route::post 	('/hafa-samband', 'AboutController@store');

Route::get 	('/{lang}/tjaldsvæði', 'CampingController@index')->name('camping');
Route::get 	('/{lang}/tjaldsvæði/{camping}', 'CampingController@show');

Route::get 	('/{lang}/q-and-a', 'QuestionController@index')->name('qAndA');



// DASHBOARD ROUTES
Route::get 	('/stjornbord', 'DashboardController@index')->name('dashboard')->middleware('verified');

Route::get 	('/stjornbord/notendur/bæta', 'UserController@index'); 
Route::post 	('/stjornbord/notendur/bæta', 'UserController@store');	
Route::get 	('/stjornbord/notendur/{id}', 'UserController@show');	
Route::patch 	('/stjornbord/notendur/{id}', 'UserController@update');	
Route::delete ('/stjornbord/notendur/{id}', 'UserController@destory');

Route::get 	('/stjornbord/tjaldsvæði/bæta', 'CampingController@dashboardIndex');
Route::post 	('/stjornbord/tjaldsvæði/bæta', 'CampingController@store');
Route::get 	('/stjornbord/tjaldsvæði/breyta', 'CampingController@dashboardShow');
Route::get 	('/stjornbord/tjaldsvæði/breyta/{id}', 'CampingController@showUpdate');
Route::patch 	('/stjornbord/tjaldsvæði/breyta/{id}', 'CampingController@update');
Route::delete ('/stjornbord/tjaldsvæði/eyda/{id}', 'CampingController@destory');

Route::get 	('/stjornbord/sölustaðir/bæta', 'SellerController@index');
Route::post 	('/stjornbord/sölustaðir/bæta', 'SellerController@store');
Route::get 	('/stjornbord/sölustaðir/breyta', 'SellerController@show');
Route::get 	('/stjornbord/sölustaðir/breyta/{id}', 'SellerController@showUpdate');
Route::patch 	('/stjornbord/sölustaðir/breyta/{id}', 'SellerController@update');
Route::delete ('/stjornbord/sölustaðir/eyda/{id}', 'SellerController@destory');






