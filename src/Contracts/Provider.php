<?php


namespace Sco\Bankcard\Contracts;


interface Provider
{
    /**
     * @param string $cardNo
     *
     * @return \Sco\Bankcard\Info
     */
    public function info($cardNo);
}
