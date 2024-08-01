# EuVatNumberValidator

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
