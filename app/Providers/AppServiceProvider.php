<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\ProductType;
use App\TruckType;
use App\Gudang;
use App\Vendor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {

            View::share('product_type', ProductType::all());

            View::share('truck_type', TruckType::all());

            View::share('warehouses', Gudang::all());

            View::share('vendors', Vendor::all());
        
        }
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
