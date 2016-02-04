<?php

use LPFCRouter\Hermes\Route;

Route::get('welcome', function() {
    echo 'welcome..';
});

Route::dispatch();
