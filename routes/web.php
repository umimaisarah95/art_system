<?php

use Illuminate\Support\Facades\Auth;
use App\Models\artclass;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//USER ROUTES
Route::get('/user', function () {
    return view('layouts.user');
});

Route::get('/user/index', function () {
    return view('user.index');
});



//ADMIN ROUTES

Route::get('/admin', [AdminController:: class, 'index'])->name('admin.index'); 

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');

Route::put('/admin/update', [AdminController::class, 'update'])->name('admin.update');

Route::delete('/admin/destroy', [AdminController::class, 'destroy'])->name('admin.destroy');


Route::get('/admin/manage', function () {
    return view('admin.manage-user');
});