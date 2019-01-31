<?php

Auth::routes();

Route::get('/', function () {
    return redirect('/is');
});

Route::get('/stjornbord', function () {
    return redirect('/stjornbord/bæta');
});

Route::get('/{lang}', 'HomeController@index')->name('home');
Route::get('/{lang}/um-okkur', 'AboutController@index')->name('about');

Route::post('/hafa-samband', 'AboutController@store');

Route::get('/{lang}/tjaldsvæði', 'CampingController@index')->name('camping');
Route::get('/{lang}/tjaldsvæði/{id}', 'CampingController@show');

Route::get('/{lang}/q-and-a', 'QuestionController@index')->name('qAndA');

Route::get('/stjornbord/bæta', 'DashboardController@index');
Route::get('/stjornbord/breytta', 'DashboardController@show');



