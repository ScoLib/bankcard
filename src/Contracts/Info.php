<?php


namespace Sco\Bankcard\Contracts;

interface Info
{
    /**
     * 银行卡信息
     *
     * @return array
     */
    public function getBankInfo();

    /**
     * 所属银行代号
     *
     * @return string
     */
    public function getBankCode();

    /**
     * 所属银行名称
     *
     * @return string
     */
    public function getBankName();

    /**
     * 所属银行icon（如果有）
     * 一般是一个图片url
     *
     * @return string
     */
    public function getBankIcon();

    /**
     * 卡类型代号
     *
     * @return string
     */
    public function getCardType();

    /**
     * 卡类型名称
     *
     * @return string
     */
    public function getCardTypeName();
}
