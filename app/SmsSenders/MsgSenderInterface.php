<?php


namespace App\SmsSenders;


interface MsgSenderInterface
{
    public function send($phone,$text);
}
