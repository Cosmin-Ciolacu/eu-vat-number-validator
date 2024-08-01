# EuVatNumberValidator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

A simple EU VAT number validator and validation rule for Laravel. 
## Installation

Via Composer

```bash
composer require cosmin-ciolacu/eu-vat-number-validator
```

## Usage
```php

use CosminCiolacu\EuVatNumberValidator\EuVatNumberValidator;

$vatNumber = 'RO123456789';
$isValid = EuVatNumberValidator::validate($vatNumber);

if ($isValid) {
    echo 'VAT number is valid';
} else {
    echo 'VAT number is not valid';
}
```

You can use in laravel validation rules like this:
```php
use CosminCiolacu\EuVatNumberValidator\Rules\EUVatNumberValidationRule;

$rules = [
    'vat_number' => ['required', new EUVatNumberValidationRule]
];

$validator = Validator::make($request->all(), $rules);
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

```bash
composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email cosminnciolacu99@gmail.com instead of using the issue tracker.

## Credits

- [Cosmnin Ciolacu][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/cosmin-ciolacu/eu-vat-number-validator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cosmin-ciolacu/eu-vat-number-validator.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cosmin-ciolacu/eu-vat-number-validator/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/cosmin-ciolacu/eu-vat-number-validator
[link-downloads]: https://packagist.org/packages/cosmin-ciolacu/eu-vat-number-validator
[link-travis]: https://travis-ci.org/cosmin-ciolacu/eu-vat-number-validator
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/cosmin-ciolacu
[link-contributors]: ../../contributors
#   e u - v a t - n u m b e r - v a l i d a t o r  
 