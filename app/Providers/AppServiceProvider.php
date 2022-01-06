<?php

namespace App\Providers;

use App\Models\category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
       View::composer('FrontEnd.include.header', function ($view){
           $view->with('categorias', category::where('category_status', 1)->get());
       });

       View::composer('FrontEnd.include.products', function ($view){
        $view->with('categorias', category::where('category_status', 1)->get());
    });
    }
}
