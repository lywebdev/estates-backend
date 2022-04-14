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


    Route::group([
        'prefix' =>'api',
        'as' => 'api.'
    ], function() {
//        Route::resource('estates', \App\Http\Controllers\Admin\API\EstatesController::class);

        Route::resource('estates-photos', \App\Http\Controllers\Admin\API\Estate\PhotoController::class);
//        Route::delete('estates/{id}/photo/{photoId}', [\App\Http\Controllers\Admin\API\EstatesController::class, 'photoDelete'])
//            ->name('estatesPhotoDelete');
    });


    Route::get('logout', function() {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect(route('home'));
    })->name('logout');
});
