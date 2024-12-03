<?php

use App\Http\Controllers\RendelesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZsautoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//USER
Route::get('/users',[UserController::class, 'show']);

//ZSAUTO
Route::get('/zsautos',[ZsautoController::class, 'show']);
Route::post('/zsautos/add',[ZsautoController::class, 'add']);
Route::patch('/zsautos/update/{id}', [ZsautoController::class, 'update']);
Route::delete('/zsautos/destroy/{id}', [ZsautoController::class, 'destroy']);

//RENDELES
Route::get('/rendeles', [RendelesController::class, 'show']);
Route::post('/rendeles/add', [RendelesController::class, 'add']);
//Route::patch('/rendeles/update/{rendeles}', [RendelesController::class, 'update']);
Route::delete('/rendeles/destroy/{id}', [RendelesController::class, 'destroy']);

