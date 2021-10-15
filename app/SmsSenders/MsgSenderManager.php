<?php

namespace App\SmsSenders;
use Illuminate\Support\Manager;

class MsgSenderManager extends Manager
{

    public function getDefaultDriver()
    {
        return 'smsKave';
    }

    public function createSmsKaveDriver()
    {
        return new KavehNegar();
    }
}
