<?php

namespace App\Providers;

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
        view()->composer(
            'partials.sidebar',
            \App\Http\ViewComposers\RecentPostsComposer::class
        );

        Blade::directive('ifGuest', function() {
            return "<?php if (auth()->guest()): ?>";
        });
    }
}
