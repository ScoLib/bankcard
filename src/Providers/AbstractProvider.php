<?php

namespace Sco\Bankcard\Providers;

use InvalidArgumentException;
use Sco\Bankcard\Contracts\Provider as ProviderContract;

abstract class AbstractProvider implements ProviderContract
{

    /**
     * 通过卡号获取银行卡信息.
     *
     * @param string $cardNo
     *
     * @return array
     */
    abstract protected function getBankInfoByCardNo($cardNo);

    /**
     * 映射原始银行卡信息为 Info 对象.
     *
     * @param array $bankInfo
     *
     * @return \Sco\Bankcard\Info
     */
    abstract protected function mapInfoToObject(array $bankInfo);

    /**
     * @inheritdoc
     */
    public function info($cardNo = null)
    {
        if (empty($cardNo) || !is_numeric($cardNo)) {
            throw new InvalidArgumentException();
        }

        $bankInfo = $this->getBankInfoByCardNo($cardNo);

        $info = $this->mapInfoToObject($bankInfo)->merge(['cardNo' => $cardNo]);

        return $info;
    }

    protected function getBankIcon($bankCode)
    {
        return '';
    }

    /**
     * Return array item by key.
     *
     * @param array  $array
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    protected function arrayItem(array $array, $key, $default = null)
    {
        if (is_null($key)) {
            return $array;
        }

        if (isset($array[$key])) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $segment) {
            if (!is_array($array) || !array_key_exists($segment, $array)) {
                return $default;
            }

            $array = $array[$segment];
        }

        return $array;
    }
}
