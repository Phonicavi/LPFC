<?php

use LPFCRouter\Hermes\Route;


/**
 * both Route::get('welcome', 'function');
 * and Route::get('/welcome', 'function');
 * are OK!!
 */
Route::get('welcome', function() {
    echo 'welcome..';
});

Route::get('home', 'HomeController@home');

Route::post('/(:all)', function($foo) {
    echo "Undefined route:<br>".$foo;
});

Route::dispatch();
