<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;

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
    return view('index');
})->name('index');


Route::get('/about',[MainController::class, 'about'])->name('about');


/** brands **/
Route::get('/admin/brands',[BrandController::class, 'brands'])->name('brands');
Route::post('/admin/add_brand',[BrandController::class, 'add_brand'])->name('add_brand');
Route::get('/admin/edit_brand_page/{id}',[BrandController::class, 'edit_brand_page'])->name('edit_brand_page');
Route::post('/admin/update_brand/{id}',[BrandController::class, 'update_brand'])->name('update_brand');


/** users **/ 
Route::get('/admin/users',[UserController::class, 'users'])->name('users');
Route::get('/admin/admins',[UserController::class, 'admins'])->name('admins');


