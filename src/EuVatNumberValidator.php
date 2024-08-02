<?php

namespace CosminCiolacu\EuVatNumberValidator;

use CosminCiolacu\EuVatNumberValidator\Exceptions\InvalidRuleForCountryCodeException;

class EuVatNumberValidator
{
    public static function validate(string $vatNumber): bool
    {
        try {
            $countryCode = substr($vatNumber, 0, 2);
            $rule = self::getRuleForCountry($countryCode);
            return preg_match($rule, $vatNumber) === 1;
        } catch (InvalidRuleForCountryCodeException $e) {
            $rule = config('eu-vat-number-validator.generic_rule');
            return preg_match($rule, $vatNumber) === 1;
        }
    }

    private static function getRuleForCountry(string $countryCode): string
    {
        $rule = config('eu-vat-number-validator.rules.' . $countryCode);
        if (empty($rule)) {
            throw new InvalidRuleForCountryCodeException($countryCode);
        }

        return $rule;
    }
}
