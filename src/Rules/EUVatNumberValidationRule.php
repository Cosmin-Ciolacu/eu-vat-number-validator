<?php

namespace CosminCiolacu\EuVatNumberValidator\Rules;

use Closure;
use CosminCiolacu\EuVatNumberValidator\EuVatNumberValidator;
use Illuminate\Contracts\Validation\ValidationRule;

class EUVatNumberValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!EuVatNumberValidator::validate($value)) {
            $fail("The $attribute is not a valid EU VAT number.");
        }
    }
}
