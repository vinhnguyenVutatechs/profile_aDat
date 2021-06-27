<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\TienDat\Profile;
use View;

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
        $settings = get_settings(['avata', 'content-demo', 'name-admin', 'facebook', 'twitter', 'instagram',
        'dribbble', 'tik-tok', 'adriano-smith-photographer', 'content-about']);

        View::share('settings', $settings);
    }
}
