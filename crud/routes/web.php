
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MyController@home')
    -> name('home');

Route::get('/details/{id}', 'MyController@details')
    -> name('details');

Route::get('/create/opsite', 'MyController@create')
    -> name('create');

Route::post('/store/ospite', 'MyController@store')
    -> name('store');
