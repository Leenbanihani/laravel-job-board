<?php

use App\Http\Controllers\jobscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view:'welcome');
});

Route::get('/new', function () {
    return 'hello new world!';
});
Route::get( uri:'/job', action:[jobscontroller::class,'index']);