<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Route::get('/about', function () {
//     return view('aboute');
// })->name('about');
// Route::get('user/{id}', function (int $id) {
//     return "ID: $id";
// }) ->name('user');
// Route::get('user/{name?}', function (?string $name = "nghia dev") {
//     return "NAme: {$name}";
// });

// // nhom
// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return "Admin Dashboard";
//     })->name('admin.dashboard');
//     Route::get('users', function () {
//         return "Admin Users";
//     })->name('admin.users');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/profile', function () {
//         return "User Profile";
//     })->name('profile');
//     Route::get('/settings', function () {
//         return "User Settings";
//     })->name('settings');
// });
// // loi 404
// Route::fallback(function () {
//     return view('404');
// });

// bai3 -4
Route::get('/user', [UserController::class, 'index'])->middleware('access.time');

//bai5
Route::get('/home', [HomeController::class, 'index']);

