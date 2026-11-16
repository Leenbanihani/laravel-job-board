<?php

use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\jobscontroller;
use Illuminate\Support\Facades\Route;

Route::get(uri:'/' ,action:[indexcontroller::class,'index']);
Route::get(uri:'/about' ,action:[indexcontroller::class,'about']);
Route::get(uri:'/contact' ,action:[indexcontroller::class,'contact']);

/*Route::get('/new', function () {
    return 'hello new world!';
});*/


Route::get( uri:'/job', action:[jobscontroller::class,'index']);