<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::resource('users',UsersController::class);