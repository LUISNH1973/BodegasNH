<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (env('REDIRECT_HTTPS')) {
       $this->app['request']->server->set('HTTPS', true);
   }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // Paginator::useBootstrap();

      if(config(key: 'app.env') === 'production') {
          URL::forceScheme('https');
      }
    }
}
