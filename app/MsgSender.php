<?php

namespace App;
use Illuminate\Support\Manager;

class MsgSender extends Manager
{

    public function getDefaultDriver()
    {
        return 'smsKave';
    }
}
