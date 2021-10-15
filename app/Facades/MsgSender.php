<?php


namespace App\Facades;


use App\MsgSenders\MsgSenderManager;
use Illuminate\Support\Facades\Facade;
/**
 * @method static void send(string $phone, string $text)
 *
 * @see MsgSenderManager
 */
class MsgSender extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'msgSender';
    }
}
