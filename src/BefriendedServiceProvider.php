<?php

namespace Rennokki\Befriended;

use Illuminate\Support\ServiceProvider;

class BefriendedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/befriended.php' => config_path('befriended.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/2018_07_14_183253_followers.php' => database_path('migrations/2018_07_14_183253_followers.php'),
            __DIR__.'/../database/migrations/2018_07_14_183254_blockers.php' => database_path('migrations/2018_07_14_183254_blockers.php'),
            __DIR__.'/../database/migrations/2018_07_14_183255_likers.php' => database_path('migrations/2018_07_14_183255_likers.php'),
        ], 'migration');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
