<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website_frontend.app');
});
