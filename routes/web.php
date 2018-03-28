<?php

Route::get('/calendar','EventController@calendar');
Route::post('/calendar', 'EventController@addEvent');


Route::get('/home','SiteController@home');
Route::get('/aluno','SiteController@aluno');
Route::get('/agenda','SiteController@agenda');
Route::get('/','SiteController@index');
