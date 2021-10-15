<?php

namespace App\Providers;

use App\MsgSender;
use App\SmsSenders\Ghasedak;
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
        $this->app->singleton(MsgSender::class);

        // extend has method in Illuminate\Support\Manage class
        // strategy pattern add custom class driver
        app(MsgSender::class)->extend('smsGhasedak',function (){
           return new Ghasedak();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
