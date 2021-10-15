<?php


namespace App\MsgSenders;


interface MsgSenderInterface
{
    public function send($phone,$text);
}
