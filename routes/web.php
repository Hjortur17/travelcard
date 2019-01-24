<?php

Route::get('/', 'HomeController@index')->name('home');				// DONE

Route::get('/um-okkur', 'AboutController@index')->name('about');		// DONE

Route::get('/tjaldsvæði', 'CampingController@index');				// DONE
Route::get('/tjaldsvæði/{id}', 'CampingController@show');			// UNDONE
