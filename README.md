# bankcard

[![StyleCI][ico-styleci]][link-styleci]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

根据银行卡号识别所属银行以及卡类型   
目前支持两种识别方式：阿里API和正则，默认使用阿里的API


## 安装

Via Composer

``` bash
$ composer require scolib/bankcard
```

## 使用

``` php
$bankcard = new Sco\Bankcard\Bankcard();
//$bankcard = new Sco\Bankcard\Bankcard(new Sco\Bankcard\Providers\RegexProvider());

// 返回一个Sco\Bankcard\Info实例
// 如果未识别 抛出异常 Sco\Bankcard\Exceptions\ValidationException
$info = $bankcard->info($cardNo);

// 银行卡信息（数组）
$info->getBankInfo();

// 所属银行代号
$info->getBankCode();

// 所属银行名称
$info->getBankName();

// 所属银行icon（如果有）
$info->getBankIcon();

// 卡类型代号
$info->getCardType();

// 卡类型名称
$info->getCardTypeName();
```

## Change log

[更新日志](CHANGELOG.md)

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email slice1213@gmail.com instead of using the issue tracker.

## Credits

- [klgd][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-styleci]: https://styleci.io/repos/84916036/shield?branch=master
[ico-version]: https://img.shields.io/packagist/v/ScoLib/bankcard.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ScoLib/bankcard/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ScoLib/bankcard.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ScoLib/bankcard.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ScoLib/bankcard.svg?style=flat-square

[link-styleci]: https://styleci.io/repos/84916036
[link-packagist]: https://packagist.org/packages/ScoLib/bankcard
[link-travis]: https://travis-ci.org/ScoLib/bankcard
[link-scrutinizer]: https://scrutinizer-ci.com/g/ScoLib/bankcard/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ScoLib/bankcard
[link-downloads]: https://packagist.org/packages/ScoLib/bankcard
[link-author]: https://github.com/klgd
[link-contributors]: ../../contributors
