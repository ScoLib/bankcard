<?php


namespace Sco\Bankcard;


class CardType
{
    private static $types = [
        'DC'  => '储蓄卡',
        'CC'  => '信用卡',
        'SCC' => '准贷记卡',
        'PC'  => '预付费卡',
    ];

    public static function get($key = null)
    {
        if (is_null($key)) {
            return self::$types;
        }

        $key = strtoupper($key);
        return isset(self::$types[$key]) ? self::$types[$key] : '';
    }
}
