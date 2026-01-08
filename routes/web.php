<?php

use Illuminate\Support\Facades\Auth;
use App\Models\artclass;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

//AUTH ROUTES
Route::get('/register', [AuthController:: class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//USER ROUTES
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

Route::get('/class/{id}', [UserController::class, 'details'])->name('class.details');

Route::post('/class/register/{id}', [UserController::class, 'registerClass'])->name('class.register');

Route::get('/user/myclasses', [UserController::class, 'myClasses'])->name('user.myclasses');

Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

//ADMIN ROUTES

Route::get('/admin/index', [AdminController:: class, 'index'])->name('admin.index'); 

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::get('/admin/edit/{artclass}', [AdminController::class, 'edit'])->name('admin.edit');

Route::put('/admin/update/{artclass}', [AdminController::class, 'update'])->name('admin.update');

Route::delete('/admin/destroy/{artclass}', [AdminController::class, 'destroy'])->name('admin.destroy'); 

Route::get('/admin/manage', [AdminController::class, 'userList'])->name('admin.manage');

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');