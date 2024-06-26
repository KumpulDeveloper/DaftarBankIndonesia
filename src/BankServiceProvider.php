<?php

namespace Kumpuldev\DaftarBankIndonesia;

use Illuminate\Support\ServiceProvider;
use Kumpuldev\DaftarBankIndonesia\BankPublishCommand;

/**
 * IndoBank Service Provider
 */
class BankServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BankPublishCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}