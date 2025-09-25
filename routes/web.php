<?php

use Illuminate\Support\Facades\Route;

// require __DIR__.'/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/leaderboard', function () {
    return view('leaderboard');
})->name('leaderboard');

Route::get('/reporting', function () {
    return view('reportingtemplate');
})->name('reporting');


Route::get('/settings', function () {
    return view('settings');
})->name('setting');
