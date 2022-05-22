<?php

use App\Http\Controllers\StudentController;
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

Route::controller(StudentController::class)
    ->prefix('student')
    ->as('student.')
    ->group(function () {
        Route::get('/', 'index')->name('index'); // show all data
        Route::get('/create', 'create')->name('create'); // create data
        Route::post('/store', 'store')->name('store'); // save to DB
        Route::get('{id}/show', 'show')->name('show'); // show 1 data only
        Route::get('{id}/edit', 'edit')->name('edit'); // edit current data only
        Route::put('{id}/update', 'update')->name('update'); // update current data to DB
        Route::delete('{id}/destroy', 'destroy')->name('destroy'); // delete current data from DB
    });
