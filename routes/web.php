<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [adminController::class, 'index'])->name('admin');
Route::get('/admin/heroes', [HeroController::class, 'index'])->name('admin.heroes');
Route::get('/admin/items', [ItemController::class, 'index'])->name('admin.items');
Route::get('/admin/enemies', [EnemyController::class, 'index'])->name('admin.enemies');
