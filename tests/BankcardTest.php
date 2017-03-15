<?php

namespace Sco\Bankcard;

use PHPUnit\Framework\TestCase;

class BankcardTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testInfo()
    {
        $bankcard = new Bankcard();
        $this->assertInstanceOf('Sco\Bankcard\Contracts\Info', $bankcard->info('6217002000055566680'));
    }

    /**
     * @expectedException \Sco\Bankcard\Exceptions\ValidationException
     */
    public function testValidationException()
    {
        $bankcard = new Bankcard();
        $bankcard->info('123456');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        $bankcard = new Bankcard();
        $bankcard->info();
    }
}
