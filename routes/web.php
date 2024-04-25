<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client/dashboard', function () {
    return view('client.dashboard');
})->name('clientDashboard');

Route::get('/client/about', function () {
    return view('client.pages.about');
});
Route::get('/client/blog', function () {
    return view('client.pages.blog');
});
Route::get('/client/blogSingle', function () {
    return view('client.pages.blogSingle');
});
Route::get('/client/contact', function () {
    return view('client.pages.contact');
});
Route::get('/client/products', function () {
    return view('client.pages.products');
});
Route::get('/client/services', function () {
    return view('client.pages.services');
});



Route::get('admin/home', [HomeController::class, 'adminDashboard'])->name('adminDashboard')->middleware('is_admin');
// Route::get('/admin/dashboard', function () {
//     return view('admin.pages.dashboard');
// });
Route::get('/admin/profile', function () {
    return view('admin.pages.profile');
});
Route::get('/admin/contact', function () {
    return view('admin.pages.contact');
});
Route::get('/admin/register', function () {
    return view('admin.pages.register');
});
Route::get('/admin/login', function () {
    return view('admin.pages.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
