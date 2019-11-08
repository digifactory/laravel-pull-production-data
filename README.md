# Laravel Pull Production Data

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digifactory/laravel-pull-production-data.svg?style=flat-square)](https://packagist.org/packages/digifactory/laravel-pull-production-data)
[![Build Status](https://img.shields.io/travis/digifactory/laravel-pull-production-data/master.svg?style=flat-square)](https://travis-ci.org/digifactory/laravel-pull-production-data)
[![Quality Score](https://img.shields.io/scrutinizer/g/digifactory/laravel-pull-production-data.svg?style=flat-square)](https://scrutinizer-ci.com/g/digifactory/laravel-pull-production-data)
[![Total Downloads](https://img.shields.io/packagist/dt/digifactory/laravel-pull-production-data.svg?style=flat-square)](https://packagist.org/packages/digifactory/laravel-pull-production-data)

This package provides a command to download your production database and `storage/app` folder to your local environment.

In the current state this package mainly scratches our own itch. Nonetheless this package can be used in nearly every Laravel environment.

![Screenshot of the command](https://digifactory.github.io/laravel-pull-production-data/screenshot.png)

The package assumes you have:
- Environment variables `DEPLOY_SERVER` and `DEPLOY_PATH` (customisable in the config)
- Setup SSH keys between your machine and the production machine

## Installation

You can install the package via composer:

```bash
composer require digifactory/laravel-pull-production-data --dev
```

## Usage

By default both the database and the storage folder will be synced.

``` php
php artisan pull-production-data
```

The following flags are available:

| Flag | Description |
| ------------- |-------------|
| -D, --no-database | Whether the database should not be synced |
| -S, --no-storage-folder | Whether the storage folder should not be synced |

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email helpdesk@digifactory.nl instead of using the issue tracker.

## Credits

- [Mark](https://github.com/mrk-j)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
