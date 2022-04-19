<?php

use Illuminate\Support\Facades\Route;

//Route::get('login', [])
Route::middleware('guest:admin')->group(function() {
    // Авторизация
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'loginForm'])->name('loginForm');
    Route::post('login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
});


Route::middleware('auth:admin')->group(function() {
    Route::get('', function() {
        return view('admin.home');
    })->name('home');

    Route::resource('estates', \App\Http\Controllers\Admin\EstatesController::class);
    Route::resource('estates-categories', \App\Http\Controllers\Admin\EstatesCategoriesController::class);
    Route::resource('services', \App\Http\Controllers\Admin\ServicesController::class);

    Route::resource('agreements', \App\Http\Controllers\Admin\AgreementsController::class);

    Route::resource('districts', \App\Http\Controllers\Admin\DistrictsController::class);
    Route::resource('cities', \App\Http\Controllers\Admin\CitiesController::class);

    Route::group([
        'prefix' =>'api',
        'as' => 'api.'
    ], function() {
        Route::resource('estates-photos', \App\Http\Controllers\Admin\API\Estate\PhotoController::class);
        Route::post('estates-photos/change-sort', [\App\Http\Controllers\Admin\API\Estate\PhotoController::class, 'changeSort'])
            ->name('estatesPhotos.changeSort');
    });


    Route::get('logout', function() {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect(route('home'));
    })->name('logout');
});
