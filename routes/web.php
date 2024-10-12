<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
});
// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/backend', function () {
//     return view('backend');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //เส้นทางไปหน้า  dashboard
    Route::get('/dashboard', function () {
        return view('backend');
    })->name('dashboard');

    //เส้นทางไปหน้า  profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    //เส้นทางไปหน้า  User
    Route::get('/userdata', function () {
        return view('userdata');
    })->name('userdata');
    //เส้นทางไปหน้า  adduser
    Route::get('/adduser', function () {
        return view('adduser');
    })->name('adduser');

    Route::get('/edituser/{id}', function ($id) {
        return view('edituser',compact('id'));
    })->name('edituser');
});

 Route::get('/login', function () {
    return view('auth.login');
})->name('login');;

 Route::get('/register', function () {
     return view('auth.register');
})->name('register');;






// Route::get('/', function () {
//     return Inertia::render('index', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('backend');
//     })->name('dashboard');
// });
