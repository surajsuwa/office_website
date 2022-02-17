<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
        // footer content
        view()->composer(['frontend.includes.footer','frontend.pages.contact'], function ($view) {
            $view->with([
                'location'=> DB::table('office_location')->where('is_active', 1)->get(),
                'office_info'=> DB::table('site_setting')->first(),
                'social_sites'=> DB::table('social_sites')->get(),
            ]);
        });

        // header content
        view()->composer(['frontend.includes.header'], function ($view) {
            $view->with([
                'platforms'=> DB::table('platforms')->where('is_active',1)->get(),
                'services_categories'=> DB::table('services_category')->where('is_active',1)->get(),
            ]);
        });
    }
}


