<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::get('/sites', function(){
    return view('admin.sites');
});

Route::get('/users', function(){
    return view('admin.users');
});