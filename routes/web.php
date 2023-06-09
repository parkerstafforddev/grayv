<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/controlpanel', function () {
    return view('controlpanel');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth:user'], function () {
    Route::get('/user/dashboard', 'UserController@dashboard')->name('user.dashboard');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
});

Route::middleware(['auth:user'])->group(function () {
    Route::get('/user/dashboard', 'UserController@dashboard')->name('user.dashboard');
});

Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
//Route::post('/upload', 'FileController@upload');
Route::post('/upload', [App\Http\Controllers\FileController::class, 'upload']);





