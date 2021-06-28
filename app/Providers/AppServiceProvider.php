<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\TienDat\Profile;
use View;
use DB;

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
        'dribbble', 'tik-tok', 'adriano-smith-photographer', 'content-about', 'count_view_web']);
        $alert_new = DB::table('contact')->where('status', 0)->orderBy('created_at', 'DESC')->limit(10)->get();
        $contact = DB::table('contact')->orderBy('created_at', 'DESC')->paginate(10);
        View::share('contact', $contact);
        View::share('alert_new', $alert_new);
        View::share('settings', $settings);
    }
}
