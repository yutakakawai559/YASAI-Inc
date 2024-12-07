<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use PharIo\Manifest\AuthorElement;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::get('item/users', [App\Http\Controllers\UsersController::class, 'index']);
    Route::post('item/users', [App\Http\Controllers\UsersController::class, 'index']);
});
