<?php
namespace App\SmsSenders;
class Ghasedak implements MsgSenderInterface
{
    public function send($phone,$text)
    {
        echo "sending: $text to $phone by Ghasedak sms";
    }
}
