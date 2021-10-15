<?php




//$sender = new \App\MsgSender(app());
use App\SmsSenders\MsgSenderManager;

$sender = app('App\SmsSenders\MsgSenderManager');
$sender->send('09120000231','Hi This is the test text');


// second way
app(MsgSenderManager::class)
    ->driver('smsGhasedak')
    ->send('09330005656','hi man this is second way register driver');

dd('');
