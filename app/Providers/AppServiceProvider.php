<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Camping;
use App\Seller;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::share('places', Camping::all());
        \View::share('sellers', Seller::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
