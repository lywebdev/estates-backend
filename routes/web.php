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

Route::get('test', function() {
    return view('test');
});


//Route::get('buildings', [\App\Http\Controllers\EstatesController::class, 'buildings'])->name('buildings');
Route::get('buildings/{slug}', [\App\Http\Controllers\EstatesController::class, 'category'])
    ->name('buildingsCategory');

Route::get('estates/{category}/{id}', [\App\Http\Controllers\EstatesController::class, 'show'])->name('estates.show');

Route::get('about', [\App\Http\Controllers\Pages\AboutController::class, 'index'])->name('about');
Route::get('sell', [\App\Http\Controllers\Pages\SellController::class, 'index'])->name('sell');
Route::get('estimation', [\App\Http\Controllers\Pages\EstimationController::class, 'index'])->name('estimation');
Route::get('speed-mortgage', [\App\Http\Controllers\Pages\MortgageController::class, 'index'])->name('speedMortgage');
Route::get('vacancy', [\App\Http\Controllers\Pages\VacancyController::class, 'index'])->name('vacancy');
Route::get('franchise', [\App\Http\Controllers\Pages\FranchiseController::class, 'index'])->name('franchise');

Route::get('agreements/purchase', [\App\Http\Controllers\AgreementController::class, 'agreements'])->name('agreements.purchase');
Route::get('agreements/{type}/{subtype?}', [\App\Http\Controllers\AgreementController::class, 'agreement'])->name('agreements.agreement');
Route::post('agreements/sign/{type}/{subtype?}', [\App\Http\Controllers\AgreementController::class, 'sign'])->name('agreements.sign');
//Route::


Route::group([
    'prefix' => 'api',
    'as' => 'api.'
], function() {
    Route::get('buildings-category', [\App\Http\Controllers\API\EstatesController::class, 'renderBuildingsCategory'])
        ->name('buildingsCategory');
    Route::post('buildings-category/count-offers', [\App\Http\Controllers\API\EstatesController::class, 'countOffers'])
        ->name('buildingsCountOffers');

    Route::get('filters/categories/flats', [\App\Http\Controllers\API\EstatesFiltersController::class, 'renderFiltersByCategory'])
        ->name('filters.categories.flats');


    Route::resource('cities', \App\Http\Controllers\API\CitiesController::class);
});
