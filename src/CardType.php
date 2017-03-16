<?php


namespace Sco\Bankcard;

class CardType
{
    protected static $cardTypes = [
        'DC'  => '储蓄卡',
        'CC'  => '信用卡',
        'SCC' => '准贷记卡',
        'PC'  => '预付费卡',
    ];

    public static function get($type = null, $default = null)
    {
        if (is_null($type)) {
            return self::$cardTypes;
        }

        return isset(self::$cardTypes[$type]) ? self::$cardTypes[$type] : $default;
    }
}
