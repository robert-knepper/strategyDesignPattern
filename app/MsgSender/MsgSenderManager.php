<?php

namespace App\MsgSender;
use Illuminate\Support\Manager;

class MsgSenderManager extends Manager
{

    public function getDefaultDriver()
    {
        return config('msgsender.driver');
    }

    public function createSmsKaveDriver()
    {
        return new KavehNegar();
    }
}
