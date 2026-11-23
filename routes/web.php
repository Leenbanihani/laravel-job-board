<?php

use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\jobscontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\commentcontroller;
use App\Http\Controllers\tagcontroller;
use Illuminate\Support\Facades\Route;

Route::get(uri:'/' ,action:[indexcontroller::class,'index']);
Route::get(uri:'/about' ,action:[indexcontroller::class,'about']);
Route::get(uri:'/contact' ,action:[indexcontroller::class,'contact']);

/*Route::get('/new', function () {
    return 'hello new world!';
});*/


Route::get( uri:'/job', action:[jobscontroller::class,'index']);
Route::get(uri: '/blog', action: [postcontroller::class, 'index']);

Route::get(uri: '/blog/create', action: [postcontroller::class, 'create']);
Route::get(uri: '/blog/delete', action: [postcontroller::class, 'delete']);//dynamic route to delete a specific post based on its ID
Route::get(uri: '/blog/{id}', action: [postcontroller::class, 'show']);//dynamic route to show a specific post based on its ID
Route::get(uri: '/comments', action: [commentcontroller::class, 'index']);
Route::get(uri: '/comments/create', action: [commentcontroller::class, 'create']);

Route::get(uri: '/tags', action: [tagcontroller::class, 'index']);
Route::get(uri: '/tags/create', action: [tagcontroller::class, 'create']);
Route::get(uri: '/tags/test_many', action: [tagcontroller::class, 'test_manytomany']);