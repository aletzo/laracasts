<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('cache', function($expression) {
            return "<?php if ( ! App\RussianCaching::setUp({$expression})) { ?>";
        });

        \Blade::directive('endcache', function() {
            return "<?php } App\RussianCaching::tearDown() ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
