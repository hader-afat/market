<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcom');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/product', function () {
//     return view('welcome');
// });
// Route::get('/product', function () {
//     return view('welcom');
// });
// Route::get('/wallet', function () {
//     return view('wallet');
// });

Route::post('test', 'App\Http\Controllers\MyController@test')->name('test');
// Route::get('test', function(){
//     return 'aaaaaaaaaaaa';
// });

Route::post('login',[App\Http\Controllers\API\AuthController::class,'login']);
Route::post('register',[App\Http\Controllers\API\AuthController::class,'register']);

Route::get('all-products', 'App\Http\Controllers\Controller@index');

Route::get('/search-form', function () {
    return view ( 'searchform' );
        } 
);

// Route::get('test', 'App\Http\Controllers\ProductController@tt');

Route::get('/', function () {
    return view('welcom');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::middleware(['auth:sanctum'])->group(function ()
{
    Route::get('/product', function () {
        return view('welcome');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/product', function () {
        return view('welcom');
    });
    Route::get('/wallet', function () {
        return view('wallet');
    });
    Route::get('logout',[App\Http\Controllers\API\AuthController::class,'logout']);

    Route::post('search','App\Http\Controllers\Controller@search');

    Route::get('purchase-product/{id}',[App\Http\Controllers\UserController::class,'purchase']);
    Route::post('add_cash',[App\Http\Controllers\UserController::class,'add_cash']);
    Route::get('profile',[App\Http\Controllers\UserController::class,'profile']);
    Route::resource('products',App\Http\Controllers\ProductController::class);
});

Route::resource('main','App\Http\Controllers\MyController');