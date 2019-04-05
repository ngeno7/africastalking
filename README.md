# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ngeno7/astalking.svg?style=flat-square)](https://packagist.org/packages/ngeno7/astalking)
[![Build Status](https://img.shields.io/travis/ngeno7/astalking/master.svg?style=flat-square)](https://travis-ci.org/ngeno7/astalking)
[![Quality Score](https://img.shields.io/scrutinizer/g/ngeno7/astalking.svg?style=flat-square)](https://scrutinizer-ci.com/g/ngeno7/astalking)
[![Total Downloads](https://img.shields.io/packagist/dt/ngeno7/astalking.svg?style=flat-square)](https://packagist.org/packages/ngeno7/astalking)

This a laravel package for sending messages using the Africa's Talking gateway

## Installation

You can install the package via composer:

```bash
composer require ngeno7/astalking
```

## Usage

Publish the config file:

``` bash

    php artisan vendor:publish

 ### Sample Usage

``` php

    ASTalking::message('hello')->to(['254712345678', '254712345678'])->send();

    // or
    
    app('astalking')->message('hello')->to(['254712345678', '254712345678'])->send();

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hillaryngeno7@gmail.com instead of using the issue tracker.

## Credits

- [hillary ngeno](https://github.com/ngeno7)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).