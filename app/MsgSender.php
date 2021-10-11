<?php

namespace App;
use App\SmsSenders\KavehNegar;
use Illuminate\Support\Manager;

class MsgSender extends Manager
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
