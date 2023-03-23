<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\backend\CompanyModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        if ( !app()->runningInConsole() ){
            $CompanyInformation = CompanyModel::find(1);
            View::Share(compact("CompanyInformation"));
        }
    }
}
