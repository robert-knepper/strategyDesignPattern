<?php

namespace App\SmsSenders;
use Illuminate\Support\ServiceProvider;

class MsgSenderServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(MsgSenderManager::class);

        // extend has method in Illuminate\Support\Manage class
        // strategy pattern add custom class driver
        app(MsgSenderManager::class)->extend('smsGhasedak',function (){
           return new Ghasedak();
        });


    }

    public function boot()
    {
        //
    }
}
