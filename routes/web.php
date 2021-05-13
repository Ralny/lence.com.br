<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\backend\DefaultCrud;
use App\Http\Livewire\backend\Apps\User\User;

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

// Demo routes Metronic
Route::get('/', [PagesController::class,'index']);
Route::get('/datatables', [PagesController::class,'datatables']);
Route::get('/ktdatatables', [PagesController::class,'ktDatatables']);
Route::get('/select2', [PagesController::class,'select2']);
Route::get('/icons/custom-icons', [PagesController::class,'customIcons']);
Route::get('/icons/flaticon', [PagesController::class,'flaticon']);
Route::get('/icons/fontawesome', [PagesController::class,'fontawesome']);
Route::get('/icons/lineawesome', [PagesController::class,'lineawesome']);
Route::get('/icons/socicons', [PagesController::class,'socicons']);
Route::get('/icons/svg', [PagesController::class,'svg']);
// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


//Routes
Route::get('/list', DefaultCrud::class);
Route::get('/users', User::class);
Route::get('/users/cadastro', User::class,'add');


