<?php

use App\Http\Controllers\PrintImageController;
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

Route::get('', 'PrintImageController@index')->name('top');
Route::post('', 'PrintImageController@store');
Route::get('Printer', 'PrintedController@index');
