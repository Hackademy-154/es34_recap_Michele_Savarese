<?php

use App\Http\Controllers\BoardgameController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,'homepage'])->name('homepage');

//! Boardgame CRUD
Route::get('/boardgame/create',[BoardgameController ::class,'create'])->name('boardgame.create');
Route::post('/boardgame/store',[BoardgameController ::class,'store'])->name('boardgame.store');
Route::get('/boardgame/index',[BoardgameController ::class,'index'])->name('boardgame.index');
