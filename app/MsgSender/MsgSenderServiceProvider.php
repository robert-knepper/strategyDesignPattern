<?php

namespace App\MsgSender;

use Illuminate\Support\ServiceProvider;

class MsgSenderServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->registerMsgSenderManager();
        $this->registerMsgSenderDriver();
    }

    protected function registerMsgSenderManager()
    {
        $this->app->singleton('msgSender', function ($app) {
            return new MsgSenderManager($app);
        });
    }

    protected function registerMsgSenderDriver(){
        // extend has method in Illuminate\Support\Manage class
        // strategy pattern add custom class driver
        app('msgSender')->extend('smsGhasedak', function () {
            return new Ghasedak();
        });

    }
}
