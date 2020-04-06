# Changelog

All notable changes to `laravel-pull-production-data` will be documented in this file

## 1.0.7 - 2020-04-03

- Made the prefix path to the `.env` file customizable through the config file (default `public_html/`). 
- Republish the config file to customize this setting. (`php artisan vendor:publish --provider="DigiFactory\PullProductionData\PullProductionDataServiceProvider" --tag="config"`)

## 1.0.6 - 2020-03-31

- Support/bugfix for Symfony 5 components

## 1.0.4 / 1.0.5 - 2020-03-25

- Support for Laravel 7.x.
