<?php

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

//USER ROUTES
Route::get('/user', function () {
    return view('layouts.user');
});

//ADMIN ROUTES

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/create', function () {
    return view('admin.create');
});

Route::get('/admin/edit', function () {
    return view('admin.edit');
});

Route::get('/admin/manage', function () {
    return view('admin.manage-user');
});