<?php


namespace App\MsgSender;


interface MsgSenderInterface
{
    public function send($phone,$text);
}
