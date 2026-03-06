<?php

namespace App\Providers;

use App\Models\Company;
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
    view()->share('data', 'starter'); // قيمة افتراضية

    view()->composer('*', function ($view) {
        // غيّر هذا حسب اسم موديل/جدول إعدادات الشركة عندك
        $companySettings = \App\Models\Company::first();
        $view->with('companySettings', $companySettings);
    });
}
}
