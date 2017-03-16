<?php


namespace Sco\Bankcard\Contracts;

interface Info
{
    public function getBankCode();

    public function getBankName();

    public function getBankIcon();

    public function getBankInfo();

    public function getCardType();

    public function getCardTypeName();
}
