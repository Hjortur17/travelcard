<?php

Auth::routes();

Route::get('/', 'HomeController@index');						// DONE

Route::get('/um-okkur', 'AboutController@index')->name('about');		// DONE

Route::post('/hafa-samband', 'ContactController@index');			// DONE

Route::get('/tjaldsvæði', 'CampingController@index');				// DONE
Route::get('/tjaldsvæði/{id}', 'CampingController@show');			// UNDONE

Route::get('/q-and-a', 'QuestionController@index');				// DONE

Route::get('/stjornbord', 'DashboardController@index');				// DONE



