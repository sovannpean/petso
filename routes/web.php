<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Client side
Route::get('/', function () {
    return view('clientSide/pages/homepage');
});

//ServerSide
Route::get('/login', function () {
    return view('serverSide/auth/login');
});
Route::get('/signup', function () {
    return view('serverSide/auth/signup');
});
