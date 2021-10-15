<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default MsgSender Driver
    |--------------------------------------------------------------------------
    |
    | Supported: "smsGhasedak", "smsKave"
    |
    */

    'driver' => env('MSG_SENDER_DRIVER', 'smsKave'),
];
