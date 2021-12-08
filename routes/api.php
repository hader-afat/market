<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\API\AuthController;
use App\Http\Middleware\ModifyTokenTable;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//path for routes in this file has prefix -> api

Route::post('login',[App\Http\Controllers\API\AuthController::class,'login']);
Route::post('register',[App\Http\Controllers\API\AuthController::class,'register']);

Route::get('all-products', 'App\Http\Controllers\Controller@index');


Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::post('logout',[App\Http\Controllers\API\AuthController::class,'logout']);
    // Route::post('addProduct',[App\Http\Controllers\ProductController::class,'addProduct']);
    
    Route::get('purchase-product/{id}',[App\Http\Controllers\UserController::class,'purchase']);

    Route::resource('products',App\Http\Controllers\ProductController::class);
    // Route::put('products/edit-product',[App\Http\Controllers\Controller::class,'fun1']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//path -> http://127.0.0.1:8000/api/main
Route::resource('main','App\Http\Controllers\MyController');
//OR

// Rout::get('login',)