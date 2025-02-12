<?php


use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\Kuesioner2Controller;
use App\Http\Controllers\Kuesioner3Controller;
use App\Http\Controllers\TendikController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Route::get('tendiks', [TendikController::class, 'index'])->name('tendik.index');
// Route::get('tendiks/create', [TendikController::class, 'create'])->name('tendik.create');

Route::get('tendiks', [\App\Http\Controllers\TendikController::class, 'index'])->name('tendik.index');
Route::get('tendiks/create', [\App\Http\Controllers\TendikController::class, 'create'])->name('tendik.create');

Route::resource('kuesioner', KuesionerController::class);
Route::resource('kuesioner2', Kuesioner2Controller::class);
Route::resource('kuesioner3', Kuesioner3Controller::class);



