<?php

namespace Sco\Bankcard\Providers;

use Sco\Bankcard\ProviderInterface;

abstract class AbstractProvider implements ProviderInterface
{
    protected static $bankList;

    public static function getBankIcon($bankCode)
    {
        return '';
    }
}
