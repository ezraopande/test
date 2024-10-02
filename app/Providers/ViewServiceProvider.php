<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Share settings with all views
        View::composer('*', function ($view) {
            $settings = Setting::first(); // Retrieve the first settings record
            $view->with('settings', $settings);
        });
    }

}
