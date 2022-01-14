<?php

namespace LaravelCustomCommands;

use Illuminate\Support\ServiceProvider;

class LaravelCustomCommandsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */


    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/customcommands.php' => config_path('customcommands.php'),
        ], 'custom-commands-config');
        // check if the Console/Commands/ directory exists
        if (!file_exists(app_path('Console/Commands/'))) {
            mkdir(app_path('Console/Commands/'), 0755, true);
        }
        $this->publishes([
            __DIR__ . '/app/Console/Commands/' => app_path('Console/Commands/'),
        ], 'custom-commands');
    }
}
