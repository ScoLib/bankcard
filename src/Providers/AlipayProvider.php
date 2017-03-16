<?php

namespace Sco\Bankcard\Providers;

use Sco\Bankcard\BankName;
use Sco\Bankcard\CardType;
use Sco\Bankcard\Exceptions\HttpException;
use Sco\Bankcard\Exceptions\ValidationException;
use Sco\Bankcard\Info;

class AlipayProvider extends AbstractProvider
{
    protected function getBankInfoByCardNo($cardNo)
    {
        $url = "https://ccdcapi.alipay.com/validateAndCacheCardInfo.json"
            . "?_input_charset=utf-8&cardNo={$cardNo}&cardBinCheck=true";

        $content = file_get_contents($url);
        if (!$content) {
            throw new HttpException();
        }

        $bankInfo = json_decode($content, true);
        if (!$bankInfo['validated']) {
            throw new ValidationException();
        }

        return $bankInfo;
    }

    protected function mapInfoToObject(array $bankInfo)
    {
        $bankCode  = $this->arrayItem($bankInfo, 'bank');
        $cardType = $this->arrayItem($bankInfo, 'cardType');

        return new Info([
            'bankCode' => $bankCode,
            'bankName' => BankName::get($bankCode),
            'bankIcon' => $this->getBankIcon($bankCode),
            'cardType' => $cardType,
            'cardTypeName' => CardType::get($cardType),
        ]);
    }

    protected function getBankIcon($bankCode)
    {
        return "https://apimg.alipay.com/combo.png?d=cashier&t={$bankCode}";
    }
}
