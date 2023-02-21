# Changelog

All notable changes to `laravel-pull-production-data` will be documented in this file

## 2.1.0 - 2022-08-27
- Added function to append commands after running `laravel-pull-production-data`

## 2.0.0 - 2022-02-23
- Support for Laravel 9 and PHP 8.1
- Dropped support for Laravel 7, Laravel 8 and PHP 7.4

## 1.1.1 - 2021-02-10
- Removed TravisCi
- Added Github workflow actions
- Support for PHP 8.0
- Dropped support for PHP 7.3

## 1.1.0 - 2020-11-24
- Merge pull request #21 from stepresearch/timeout-duplicate-prod, Use timeout setting when creating production database backup

## 1.0.9 - 2020-09-24
- Support for Laravel 8.x

## 1.0.8 - 2020-04-10
- Added default fallback value for `config('pull-production-data.paths.env')`.

## 1.0.7 - 2020-04-06

- Made the prefix path to the `.env` file customizable through the config file (default `public_html/`). 
- Republish the config file to customize this setting. (`php artisan vendor:publish --provider="DigiFactory\PullProductionData\PullProductionDataServiceProvider" --tag="config"`)

## 1.0.6 - 2020-03-31

- Support/bugfix for Symfony 5 components

## 1.0.4 / 1.0.5 - 2020-03-25

- Support for Laravel 7.x.
