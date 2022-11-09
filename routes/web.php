<?php

use App\Http\Controllers\UserController;
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
    return view('dashboard');
});

Route::view('/dashboard', "dashboard")->name('dashboard');

Route::view('/material_mulmed', "material_mulmed")->name('material_mulmed');
Route::view('/material_gudang', "material_gudang")->name('material_gudang');


Route::get('/user', [ UserController::class, "index_view" ])->name('user');
Route::view('/user/new', "pages.user.user-new")->name('user.new');
Route::get('/new', [ UserController::class, "index_view" ])->name('new');
Route::view('/new/new', "pages.user.user-new")->name('new.new');
Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

