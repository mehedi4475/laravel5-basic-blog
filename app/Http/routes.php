<?php


Route::get('/','Test@login');
Route::get('/login','Test@login');
Route::post('/login','Test@loginVerification');
Route::get('/dashboard','Test@dashboard');
Route::get('/logout','Test@logout');





Route::get('/create','Test@create');
Route::post('/create','Test@store');
Route::get('/{id}','Test@show');
Route::post('/update/{id}','Test@update');
Route::get('/{id}/edit', 'Test@edit');
Route::get('/{id}/delete', 'Test@destroy');


