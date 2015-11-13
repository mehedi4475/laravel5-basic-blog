<?php
Route::get('/','Test@index');
Route::get('/create','Test@create');
Route::post('/create','Test@store');
Route::get('/{id}','Test@show');



