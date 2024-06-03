<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

Route::get('/students', [studentController::class, 'index']);
// Route::get('/students', function () {
//     return 'Students List';
// });

Route::get('/students/{id}', [studentController::class, 'show']);
// Route::get('/students/{+', function () {
//     return 'Students List Uno';
// });

Route::post('/students', [studentController::class, 'store']);
// Route::post('/students', function () {
//     return 'Students post';
// });

Route::put('/students/{id}', [studentController::class, 'update']);

Route::patch('/students/{id}', [studentController::class, 'updatePartial']);

Route::delete('/students/{id}', [studentController::class, 'destroy']);



