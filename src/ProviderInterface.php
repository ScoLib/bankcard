<?php


namespace Sco\Bankcard;


interface ProviderInterface
{
    public static function getBankInfo($bankCode);
}
