<?php
Route::get('login', 'Devhiren\Login\LoginController@index');
Route::post('login-submit', 'Devhiren\Login\LoginController@loginSubmit');
