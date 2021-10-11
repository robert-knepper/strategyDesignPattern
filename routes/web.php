<?php




$sender = new \App\MsgSender(app());
$sender->send('09120000231','Hi This is the test text');

dd('');
