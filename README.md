# Migrate Fresh for Specific Tables Only

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ziming/specific-migrate-fresh.svg?style=flat-square)](https://packagist.org/packages/ziming/specific-migrate-fresh)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ziming/specific-migrate-fresh/run-tests?label=tests)](https://github.com/ziming/specific-migrate-fresh/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ziming/specific-migrate-fresh/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/ziming/specific-migrate-fresh/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ziming/specific-migrate-fresh.svg?style=flat-square)](https://packagist.org/packages/ziming/specific-migrate-fresh)

Want migrate:fresh but not drop all the tables? This is for you.

## Support me

Donations are welcomed.

## Installation

You can install the package via composer:

```bash
composer require ziming/specific-migrate-fresh
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="specific-migrate-fresh-config"
```

This is the contents of the published config file:

```php
return [
    'mode' => env('SPECIFIC_MIGRATE_FRESH_MODE', 'exclude'),

    /*
     * This will be used if mode is exclude.
     *
     * If mode is exclude, the database tables and views in this array will be excluded
     * from getting dropped.
     */
    'tables_to_exclude' => [

    ],

    /*
     * This will be used if mode is include.
     *
     * If mode is include, only the database tables and views in this array will be dropped
     */
    'tables_to_include' => [
        //
    ],
];
```

## Usage

Go to the config file, choose your preferred mode ('exclude' or 'include).

Fill in the relevant array ('excluded_tables' or 'included_tables').

And call the command below. The `--seed` option is optional. 

```bash
php artisan specific-migrate-fresh --seed
```

The end of this command simply just call the `php artisan migrate --seed` command at the end.

If you do not want to call your DatabaseSeeder. Leave out `--seed` from your command.

```bash
php artisan specific-migrate-fresh
```

## Testing

PRs are welcomed on this

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ziming](https://github.com/ziming)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
