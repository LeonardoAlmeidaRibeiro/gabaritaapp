<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site/registration', [UserController::class, 'registration'])->name('site.registration');


Route::post('/testeCadastro', function (Request $request) {
    dd($request->all());
    return view('welcome');
})->name('testeCadastro');