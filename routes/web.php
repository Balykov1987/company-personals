<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'company', 'middleware' => 'admin'], function() {
    Route::get('/', [Controllers\Company\IndexController::class, '__invoke'])->name('company.index');
    Route::get('/create', [Controllers\Company\CreateController::class, '__invoke'])->name('company.create');
    Route::post('/', [Controllers\Company\StoreController::class, 'store'])->name('company.store');
    Route::get('/{company}', [Controllers\Company\ShowController::class, '__invoke'])->name('company.show');
    Route::get('/{company}/edit', [Controllers\Company\EditController::class, '__invoke'])->name('company.edit');
    Route::patch('/{company}', [Controllers\Company\UpdateController::class, '__invoke'])->name('company.update');
    Route::delete('/{company}', [Controllers\Company\DeleteController::class, '__invoke'])->name('company.delete');
});

Route::group(['prefix' => 'personal', 'middleware' => ['auth','admin']], function() {
    Route::get('/', [Controllers\Personal\IndexController::class, '__invoke'])->name('person.index');
    Route::get('/create', [Controllers\Personal\CreateController::class, '__invoke'])->name('person.create');
    Route::post('/', [Controllers\Personal\StoreController::class, '__invoke'])->name('person.store');
    Route::get('/{person}', [Controllers\Personal\ShowController::class, '__invoke'])->name('person.show');
    Route::get('/{person}/edit', [Controllers\Personal\EditController::class, '__invoke'])->name('person.edit');
    Route::patch('/{person}', [Controllers\Personal\UpdateController::class, '__invoke'])->name('person.update');
    Route::delete('/{person}', [Controllers\Personal\DeleteController::class, '__invoke'])->name('person.delete');
});




