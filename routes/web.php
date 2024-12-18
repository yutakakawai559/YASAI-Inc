<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use PharIo\Manifest\AuthorElement;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ItemController;

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
Route::post('item/user/edit', [App\Http\Controllers\UsersController::class, 'item/user/edit'])->name('resources.views.item.user.edit');
Route::get('item/user/search', [App\Http\Controllers\UsersController::class, 'search'])->name('resources.views.item.user.search');
Route::post('item/user/search', [App\Http\Controllers\UsersController::class, 'search'])->name('resources.views.item.user.search');
Route::post('/execute-function', [App\Http\Controllers\ItemController::class, 'executeFunction'])->name('execute.function');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('user.index');
    Route::post('/users', [App\Http\Controllers\UsersController::class, 'index']);
    Route::get('/logout-and-register', function(){
        Auth::logout(); //ログアウト処理
        return redirect()->route('register'); //ユーザー登録画面にリダイレクト
    })->name('logout.and.register');
    Route::post('/delete', [\App\Http\Controllers\ItemController::class, 'delete']);
    Route::post('/edit', [App\Http\Controllers\ItemController::class, 'edit']);
    Route::post('item/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit'])->name('item.edit');
    Route::put('/users/{id}', [\App\Http\Controllers\UsersController::class, 'update'])->name('users.update');
});
