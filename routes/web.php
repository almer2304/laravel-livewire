<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('panel')->middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('backend.dashboard.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
