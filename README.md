# cms

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require amcms/cms
```

## Usage

``` php
$skeleton = new Amcms\Cms();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email a.looze@gmail.com instead of using the issue tracker.

## Credits

- [amcms][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/amcms/cms.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/amcms/cms/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/amcms/cms.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/amcms/cms.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/amcms/cms.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/amcms/cms
[link-travis]: https://travis-ci.org/amcms/cms
[link-scrutinizer]: https://scrutinizer-ci.com/g/amcms/cms/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/amcms/cms
[link-downloads]: https://packagist.org/packages/amcms/cms
[link-author]: https://github.com/amcms
[link-contributors]: ../../contributors
