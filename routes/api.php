<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ZsautoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users',[UserController::class, 'show']);
Route::get('/zsautos',[ZsautoController::class, 'show']);
Route::post('/zsautos/add',[ZsautoController::class, 'add']);
Route::patch('/zsautos/update/{id}', [ZsautoController::class, 'update']);
