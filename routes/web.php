<?php

Auth::routes();

Route::get('/', function () {
    return redirect('/en');
});

Route::get('/{lang}', 'HomeController@index')->name('home');

Route::get('/{lang}/um-okkur', 'AboutController@index')->name('about');
Route::get('/{lang}/skilmalar', 'AboutController@show');

Route::post('/hafa-samband', 'ContactController@index');

Route::get('/{lang}/tjaldsvæði', 'CampingController@index');
Route::get('/{lang}/tjaldsvæði/{id}', 'CampingController@show');

Route::get('/{lang}/q-and-a', 'QuestionController@index');

Route::get('/stjornbord', 'DashboardController@index');



