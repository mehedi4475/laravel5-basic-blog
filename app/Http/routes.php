<?php

Route::get('/','Test@index');
Route::get('/create','Test@create');
Route::post('/create','Test@store');
Route::get('/{id}','Test@show');
Route::post('/update/{id}','Test@update');
Route::get('/{id}/edit', 'Test@edit');
Route::get('/{id}/delete', 'Test@destroy');


