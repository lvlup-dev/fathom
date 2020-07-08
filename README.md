# 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lvlup-dev/fathom.svg?style=flat-square)](https://packagist.org/packages/lvlup-dev/fathom)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lvlup-dev/fathom/run-tests?label=tests)](https://github.com/lvlup-dev/fathom/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/lvlup-dev/fathom.svg?style=flat-square)](https://packagist.org/packages/lvlup-dev/fathom)


This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Support Us

If you want to support our work, you can : 
- consider Sponsoring us on Github,
- signup to Fathom using [this affiliate link](https://usefathom.com/ref/RZUCVU).

## Installation

You can install the package via composer:

```bash
composer require lvlup-dev/fathom
```

## Usage

### Register PageView

``` php
Fathom::script(YOUR_SITE_ID)
```

### Register Goal Completion

``` php
Fathom::goalCompletion(YOUR_GOAL_ID, VALUE_IN_CENTS)
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email didier@lvlup.fr instead of using the issue tracker.

## Credits

- [Didier Sampaolo](https://github.com/dsampaolo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
