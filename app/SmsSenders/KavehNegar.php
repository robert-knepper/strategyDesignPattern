<?php
namespace App\SmsSenders;

class KavehNegar
{
    public function send($phone,$text)
    {
        echo "sending: $text to $phone by kave";
    }
}
