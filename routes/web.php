<?php

$sender = app('msgSender');
$sender->send('09120000231','Hi This is the test text');


// second way
app('msgSender')
    ->driver('smsGhasedak')
    ->send('09330005656','hi man this is second way register driver');

// call by facade
\App\Facades\MsgSender::driver('smsGhasedak')->send('+989120000056','im facade text');
\App\Facades\MsgSender::send('+989120000056','im facade text');

dd('');
