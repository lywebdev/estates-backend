<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('buildings', [\App\Http\Controllers\EstatesController::class, 'buildings'])->name('buildings');
Route::get('buildings/{slug}', [\App\Http\Controllers\EstatesController::class, 'category'])
    ->name('buildingsCategory');


Route::group([
    'prefix' => 'api',
    'as' => 'api.'
], function() {
    Route::get('buildings-category', [\App\Http\Controllers\API\EstatesController::class, 'renderBuildingsCategory'])
        ->name('buildingsCategory');
    Route::post('buildings-category/count-offers', [\App\Http\Controllers\API\EstatesController::class, 'countOffers'])
        ->name('buildingsCountOffers');
});
