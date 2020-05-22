<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('users', 'UserController@users')->middleware('jwt.verify');