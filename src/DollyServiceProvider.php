<?php

namespace Asr\Dolly;

use Illuminate\Support\ServiceProvider;

class DollyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'\routes.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Asr\Dolly\DollyFormController');
        $this->loadViewsFrom(__DIR__.'/views', 'dollyForm');
    }
}
