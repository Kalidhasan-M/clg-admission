<?php

namespace App\Providers;

use App\Settings\GeneralSettings;
use Illuminate\Support\ServiceProvider;
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
        $settings = app(GeneralSettings::class);

        $socialLinks = [
            'fb' => $settings->fb ?? '',
            'insta' => $settings->insta ?? '',
            'ytube' => $settings->ytube ?? '',
            'twitter' => $settings->twitter ?? '',
            'location' => $settings->location ?? '',
        ];

        View::share('socialLinks', $socialLinks);
    }
}
