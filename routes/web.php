<?php

use App\Http\Controllers\greeting\greeting;
use App\Http\Controllers\Hallo\HalloController;
use App\Http\Controllers\jurusuan\jurusan;
use App\Http\Controllers\todo\TodoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo',function(){
    return view('coba.halo');

});

Route::get('/halo2', [HalloController::class, 'index'])->name('halo2');
Route::get('/halo', [jurusan::class, 'index'])->name('halo3');

Route::get('/greeting',[greeting::class,'greeting']);

Route::get('/todo', [TodoController::class, 'index'])->name('todo');

Route::post('/todo/post',[TodoController::class,'store'])->name('todo_post');


