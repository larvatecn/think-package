Think Package
---

thinkphp package template.

## Installing

```shell
$ composer require larva/think-package -vvv
```

### Migrations

This step is also optional, if you want to custom the pivot table, you can publish the migration files:

```php
$ php artisan vendor:publish --provider="Larva\\ThinkPackage\\PackageService" --tag=migrations
```

## Usage

TODO

### Events

| **Event**                                       | **Description**                             |
| ----------------------------------------------- | ------------------------------------------- |
| `Larva\ThinkPackage\Events\SampleEvent`    | Sample description.                         |

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/larvatecn/think-package/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/larvatecn/think-package/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
