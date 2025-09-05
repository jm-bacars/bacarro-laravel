<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})-> name('landing');

Route::get('/about', function () {
    return view('about');

})-> name('about');

Route::get('/products', function () {
    return view('products');

})-> name('products');


Route::get('/store', function () {
    return view('store');

})-> name('store');


Route::get('/welcome', function () {
    return view('welcome');

})-> name('welcome');


Route::get('/landing', function () {
    return view('landing');
})-> name('landing');

Route::get('/login', function () {
    return view('login');
})-> name('login');

Route::get('/register', function () {
    return view('register');
})-> name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
