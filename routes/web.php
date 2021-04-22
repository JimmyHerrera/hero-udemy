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

Route::prefix('admin')->group(function () {
    Route::get('/', [adminController::class, 'index'])->name('admin');

    Route::prefix('heroes')->group(function () {
        Route::get('/', [HeroController::class, 'index'])->name('admin.heroes');
        Route::get('create', [HeroController::class, 'create'])->name('admin.heroes.create');
    });
    Route::get('items', [ItemController::class, 'index'])->name('admin.items');
    Route::get('enemies', [EnemyController::class, 'index'])->name('admin.enemies');
});

/*
$table->increments('id');
$table->string('name');
$table->integer('hp');
$table->integer('atq');
$table->integer('def');
$table->integer('luck');
$table->integer('coins');
$table->integer('xp');
*/
