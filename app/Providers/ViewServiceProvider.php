<?php

namespace App\Providers;

use App\View\Composers\AdminUserComposer;
use App\View\Composers\EstatesCategoriesComposer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin/*', AdminUserComposer::class);
        View::composer('*', EstatesCategoriesComposer::class);
    }
}
