<?php


namespace Sco\Bankcard;

use Sco\Bankcard\Contracts\Factory as FactoryContract;
use Sco\Bankcard\Contracts\Provider as ProviderContract;
use Sco\Bankcard\Providers\AlipayProvider;

/**
 * @method Contracts\Info info(string $cardNo)
 */
class Bankcard implements FactoryContract
{
    /**
     * @var \Sco\Bankcard\Contracts\Provider
     */
    protected $provider;

    public function __construct(ProviderContract $provider = null)
    {
        $this->provider = $provider ?: $this->getDefaultProvider();
    }

    protected function getDefaultProvider()
    {
        return new AlipayProvider();
    }

    public function provider()
    {
        return $this->provider;
    }

    public function __call($method, $parameters)
    {
        return call_user_func_array([$this->provider(), $method], $parameters);
    }
}
