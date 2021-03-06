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
Route::get('price-of-services', [\App\Http\Controllers\Pages\PriceServicesController::class, 'index'])->name('priceServices');
Route::get('vacancy', [\App\Http\Controllers\Pages\VacancyController::class, 'index'])->name('vacancy');
Route::get('franchise', [\App\Http\Controllers\Pages\FranchiseController::class, 'index'])->name('franchise');

Route::get('agreements/purchase', [\App\Http\Controllers\AgreementController::class, 'agreements'])->name('agreements.purchase');
Route::get('agreements/{type}/{subtype?}', [\App\Http\Controllers\AgreementController::class, 'agreement'])->name('agreements.agreement');
Route::post('agreements/sign/{type}/{subtype?}', [\App\Http\Controllers\AgreementController::class, 'sign'])->name('agreements.sign');

Route::get('ad-submit/{category}', [\App\Http\Controllers\SubmitController::class, 'submitForm'])->name('submitForm');

Route::post('ad-submit', [\App\Http\Controllers\SubmitController::class, 'submit'])->name('submit');


Route::group([
    'prefix' => 'api',
    'as' => 'api.'
], function() {
    Route::get('buildings-category', [\App\Http\Controllers\API\EstatesController::class, 'renderBuildingsCategory'])
        ->name('buildingsCategory');
    Route::post('buildings-category/count-offers', [\App\Http\Controllers\API\EstatesController::class, 'countOffers'])
        ->name('buildingsCountOffers');

    Route::get('filters/categories/{category}', [\App\Http\Controllers\API\EstatesFiltersController::class, 'renderFiltersByCategory'])
        ->name('filters.category');


    Route::resource('cities', \App\Http\Controllers\API\CitiesController::class);
    Route::resource('districts', \App\Http\Controllers\API\DistrictsController::class);
});


/*
|--------------------------------------------------------------------------
| Auth Web Routes
|--------------------------------------------------------------------------
|
| ?????????? ???????????????????? ???????????????? AUTH
|
*/
Route::middleware('guest')->group(function() {
    // ??????????????????????
    Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
});
Route::group([
    'prefix' => 'auth'
], function() {
    Route::middleware('guest')->group(function() {
        Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'loginForm'])->name('loginForm');
        Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

        Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerForm'])->name('registerForm');
        Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->group(function() {
        Route::get('email/verify', [\App\Http\Controllers\Auth\VerificationController::class, 'notice'])->name('verification.notice');
        Route::post('email/verification-notification', [\App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');
        Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');


        Route::get('logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
    });

    Route::middleware('verified')->group(function() {

    });
});


/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| ?????????? ???????????????????? ???????????????? ??????????-????????????
|
*/

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin']
], function() {
    Route::get('', function() {
        return view('admin.home');
    })->name('home');

    Route::group([
        'prefix' => 'estates',
        'as' => 'estates.'
    ], function() {
        Route::resource('parking', \App\Http\Controllers\Admin\Estates\ParkingController::class);
        Route::resource('bathrooms', \App\Http\Controllers\Admin\Estates\BathroomController::class);
        Route::resource('conditions', \App\Http\Controllers\Admin\Estates\ConditionController::class);
        Route::resource('locations', \App\Http\Controllers\Admin\Estates\EstateLocationsController::class);
        Route::resource('furniture', \App\Http\Controllers\Admin\Estates\FurnitureController::class);
        Route::resource('purposes', \App\Http\Controllers\Admin\Estates\PurposeController::class);
        Route::resource('heating', \App\Http\Controllers\Admin\Estates\HeatingController::class);
        Route::resource('sewage', \App\Http\Controllers\Admin\Estates\SewageController::class);
        Route::resource('status', \App\Http\Controllers\Admin\Estates\StatusController::class);
        Route::resource('wall-material', \App\Http\Controllers\Admin\Estates\WallMaterialsController::class);
        Route::resource('sell-variants', \App\Http\Controllers\Admin\Estates\SellVariantsController::class);
        Route::resource('floor-coverings', \App\Http\Controllers\Admin\Estates\FloorCoveringController::class);
    });

    Route::resource('estates', \App\Http\Controllers\Admin\EstatesController::class);
    Route::resource('services', \App\Http\Controllers\Admin\ServicesController::class);

    Route::resource('agreements', \App\Http\Controllers\Admin\AgreementsController::class);

    Route::resource('districts', \App\Http\Controllers\Admin\DistrictsController::class);
    Route::resource('cities', \App\Http\Controllers\Admin\CitiesController::class);

    Route::resource('users', \App\Http\Controllers\Admin\UsersController::class);


    Route::group([
        'prefix' =>'api',
        'as' => 'api.'
    ], function() {
        Route::resource('estates-photos', \App\Http\Controllers\Admin\API\Estate\PhotoController::class);
        Route::post('estates-photos/change-sort', [\App\Http\Controllers\Admin\API\Estate\PhotoController::class, 'changeSort'])
            ->name('estatesPhotos.changeSort');
        Route::post('estate-photos/upload', [\App\Http\Controllers\Admin\API\Estate\PhotoController::class, 'upload'])->name('estatePhotos.upload');
    });
});
