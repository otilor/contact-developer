<?php
namespace GabrielFemi\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {

            $this->publishes([
                __DIR__ . '/../config/contact.php' => config_path('contact.php'),
            ]);

            $this->loadRoutesFrom(__DIR__ . '/routes.php');
            $this->loadViewsFrom(__DIR__ . '/views', 'contact');
            $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
            $this->mergeConfigFrom(__DIR__ . '/../config/contact.php', 'contact');
    }

    public function register()
    {
        //
    }
}
