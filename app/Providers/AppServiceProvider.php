<?php

namespace App\Providers;

use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // fixes SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes (Connection: mysql, SQL: alter table `users` add unique `users_email_unique`(`email`))
        Schema::defaultStringLength(191);

    // напоминает сделать eager loading для оптимизации запросов
        Model::preventLazyLoading(!app()->isProduction());

        // выводит exception если не заполнены нужные поля fillable в модели
        Model::preventSilentlyDiscardingAttributes(!app()->isProduction());

        // если запросы к бд выполняются дольше чем указанное количество секунд
        DB::whenQueryingForLongerThan(500, function (Connection $connection) {
            // Log, Telegram notification
        });
    }
}
