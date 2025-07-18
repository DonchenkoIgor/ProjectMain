<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , [\App\Http\Controllers\PageController::class, 'index']);

Route::get('/transport', [\App\Http\Controllers\TransportController::class, 'transport'])->name('transport');
Route::get('/package', [\App\Http\Controllers\PackageController::class, 'package'])->name('package');
Route::get('/price',[\App\Http\Controllers\PriceController::class, 'price'])->name('price');

Route::get('services', [\App\Http\Controllers\ServiceController::class, 'services'])->name('services');
Route::group(['prefix'=> 'services'], function (){
    Route::get('/pereyizd', [\App\Http\Controllers\ServiceController::class, 'moving'])->name('moving');
    Route::get('/perevezennya', [\App\Http\Controllers\ServiceController::class, 'transportation'])->name('transportation');
    Route::get('/vivIz-nepotribnih-rechey', [\App\Http\Controllers\ServiceController::class, 'removal'])->name('removal');
    Route::get('/zavantazhennya-ta-vivantazhennya', [\App\Http\Controllers\ServiceController::class, 'loadingUnloading'])->name('loadingUnloading');
    Route::get('/vantazhne-taksi', [\App\Http\Controllers\ServiceController::class, 'cargoTaxi'])->name('cargoTaxi');
    Route::get('/vantazhniki', [\App\Http\Controllers\ServiceController::class, 'warehouseWork'])->name('warehouseWork');
    Route::get('/mizhmIski-perevezennya', [\App\Http\Controllers\ServiceController::class, 'international'])->name('international');
});

Route::post('/form-submit', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::post('/feedback', [\App\Http\Controllers\FeedbackController::class, 'feedback'])->name('feedback.store');
Route::post('/reviews', [\App\Http\Controllers\ReviewController::class, 'saveReview'])->name('reviews');

