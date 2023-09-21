<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
 
Route::get('/counter', Counter::class);
Route::get('/create-post', CreatePost::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form'); // Replace 'form' with the actual name of your Blade view
})->name('form'); // Give the route a name (optional but recommended)


Route::get('/vacancy', function () {
    return view('vacancy'); // Replace 'vacancy' with the actual name of your Blade view
})->name('vacancy'); // Give the route a name (optional but recommended)

Route::get('/novacancy', function () {
    return view('novacancy'); // Replace 'vacancy' with the actual name of your Blade view
})->name('novacancy'); // Give the route a name (optional but recommended)

Route::get('/userprofile', function () {
    return view('userprofile'); // Replace 'vacancy' with the actual name of your Blade view
})->name('userprofile'); // Give the route a name (optional but recommended)


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
