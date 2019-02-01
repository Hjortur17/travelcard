<?php

Auth::routes();

Route::get('/', function () {
    return redirect('/en');
});

Route::get('/stjornbord', 'DashboardController@index');

Route::get('/{lang}', 'HomeController@index')->name('home');
Route::get('/{lang}/um-okkur', 'AboutController@index')->name('about');
Route::get('/{lang}/sölustaðir', 'AboutController@show')->name('sellers');


Route::get('/{lang}/tjaldsvæði', 'CampingController@index')->name('camping');
Route::get('/{lang}/tjaldsvæði/{id}', 'CampingController@show');

Route::get('/{lang}/q-and-a', 'QuestionController@index')->name('qAndA');

Route::get('/stjornbord/tjaldsvæði/bæta', 'DashboardController@campingAdd');
Route::get('/stjornbord/tjaldsvæði/breytta', 'DashboardController@campingEdit');


Route::post('/hafa-samband', 'AboutController@store');
Route::post('/stjornbord/bæta', 'DashboardController@store');



