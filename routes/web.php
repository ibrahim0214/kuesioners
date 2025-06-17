<?php


use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\Kuesioner2Controller;
use App\Http\Controllers\Kuesioner3Controller;
use App\Http\Controllers\Kuesioner4Controller;
use App\Http\Controllers\Kuesioner5Controller;
use App\Http\Controllers\Kuesioner6Controller;
use App\Http\Controllers\Kuesioner7Controller;
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
Route::resource('kuesioner4', Kuesioner4Controller::class);
Route::resource('kuesioner5', Kuesioner5Controller::class);
Route::resource('kuesioner6', Kuesioner6Controller::class);
Route::resource('kuesioner7', Kuesioner7Controller::class);


