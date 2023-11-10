<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
#mengimport controller student
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// method get
Route::get('/animals',[AnimalController::class, 'index']);

//method post
Route::post('/animals', [AnimalController::class, 'store']);

//method put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

//method delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

#Route student
Route::middleware('auth:sanctum')->group(function () {
    //method get
Route::get('/students',[StudentController::class, 'index']);

//method show
Route::get('/students/{id}', [StudentController::class, 'show']);

//method post
Route::post('/students', [StudentController::class, 'store']);

//method put
Route::put('/students/{id}', [StudentController::class, 'update']);

//method delete
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

});

#Route untuk register dan login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);