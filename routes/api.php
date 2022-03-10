<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DeskController;

Route::get('/faculties', [FacultyController::class, 'index']);

Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/desks', [DeskController::class, 'index']);
Route::post('/desks', [DeskController::class, 'store']);
Route::delete('/desks/{id}', [DeskController::class, 'destroy']);
