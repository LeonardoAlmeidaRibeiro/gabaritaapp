<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/registration', [UserController::class, 'registration'])->name('site.registration');
Route::post('/site/cadastration', [UserController::class, 'cadastration'])->name('site.cadastration');

Route::get('/teste', function (Request $request) {
    dd($request->all());
    return view('teste');
})->name('teste');