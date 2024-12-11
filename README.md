# A Filament Plugin for using webcam functionality for Filament Forms.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zydnrbrn/filament-webcam.svg?style=flat-square)](https://packagist.org/packages/zydnrbrn/filament-webcam)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/zydnrbrn/filament-webcam/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/zydnrbrn/filament-webcam/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/zydnrbrn/filament-webcam/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/zydnrbrn/filament-webcam/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zydnrbrn/filament-webcam.svg?style=flat-square)](https://packagist.org/packages/zydnrbrn/filament-webcam)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require zydnrbrn/filament-webcam
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-webcam-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-webcam-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-webcam-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentWebcam = new Zydnrbrn\FilamentWebcam();
echo $filamentWebcam->echoPhrase('Hello, Zydnrbrn!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Zidan Khulul Sajid](https://github.com/zydnrbrn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
