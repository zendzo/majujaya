<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\ProductType;
use App\PembelianType;
use App\TruckType;
use App\Gudang;
use App\Vendor;
use App\Supplier;
use App\Product;
use App\Satuan;

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

            View::share('order_type', PembelianType::all());

            View::share('truck_type', TruckType::all());

            View::share('warehouses', Gudang::all());

            View::share('vendors', Vendor::all());

            View::share('suppliers', Supplier::all());

            View::share('products', Product::all());

            View::share('satuans', Satuan::all());
        
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
