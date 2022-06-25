<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

// Route::resource('users',UsersController::class);

Route::get('/index', function () {

    return view('frontend.layout.master');
});