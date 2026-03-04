<?php

namespace App\Modules\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    private const MODULE_PATH = 'Modules/User';
    public function register(): void
    {

    }

    public function boot()
    {
        // $this->loadRoutesFrom(
        //     app_path(self::MODULE_PATH.'/Routes/api.php')
        // );

        // $this->loadMigrationsFrom(
        //     app_path(self::MODULE_PATH.'/Database/migrations')
        // );
    }
}
