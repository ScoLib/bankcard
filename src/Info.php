<?php


namespace Sco\Bankcard;

use Sco\Bankcard\Contracts\Info as InfoContract;
use Sco\Bankcard\Traits\HasAttributes;

class Info implements InfoContract
{
    use HasAttributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function getBank()
    {
        return $this->getAttribute('bank');
    }

    public function getBankName()
    {
        return $this->getAttribute('bankName');
    }

    public function getBankIcon()
    {
        return $this->getAttribute('bankIcon');
    }

    public function getBankInfo()
    {
        return $this->getAttributes();
    }

    public function getCardType()
    {
        return $this->getAttribute('cardType');
    }

    public function getCardTypeName()
    {
        return $this->getAttribute('cardTypeName');
    }
}
