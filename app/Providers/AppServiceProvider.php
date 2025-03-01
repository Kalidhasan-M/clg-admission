<?php
namespace App\Providers;
use App\Settings\GeneralSettings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        // Only attempt to load settings if the settings table exists
        if (Schema::hasTable('settings')) {
            try {
                $settings = app(GeneralSettings::class);
                $socialLinks = [
                    'fb' => $settings->fb ?? '',
                    'insta' => $settings->insta ?? '',
                    'ytube' => $settings->ytube ?? '',
                    'twitter' => $settings->twitter ?? '',
                    'location' => $settings->location ?? '',
                ];
                View::share('socialLinks', $socialLinks);
            } catch (\Exception $e) {
                // Provide default empty values if there's any issue
                View::share('socialLinks', [
                    'fb' => '',
                    'insta' => '',
                    'ytube' => '',
                    'twitter' => '',
                    'location' => '',
                ]);
            }
        } else {
            // Default empty values when settings table doesn't exist
            View::share('socialLinks', [
                'fb' => '',
                'insta' => '',
                'ytube' => '',
                'twitter' => '',
                'location' => '',
            ]);
        }
    }
}