<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('menus',[MenusController::class, 'index'])->name('menu-ope');
Route::get('menu-list',[MenusController::class, 'list'])->name('menu-list');
Route::post('menus',[MenusController::class, 'create']);
