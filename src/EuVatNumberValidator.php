<?php

namespace CosminCiolacu\EuVatNumberValidator;

class EuVatNumberValidator
{
    public static function validate(string $vatNumber): bool
    {
        try {
            $countryCode = substr($vatNumber, 0, 2);
            $rule = self::getRuleForCountry($countryCode);
            return preg_match($rule, $vatNumber) === 1;
        } catch (InvalidRuleForCountryCodeException $e) {
            return false;
        }
    }

    private static function getRuleForCountry(string $countryCode): string
    {
        $rule = config('vat_number_validator.rules.' . $countryCode);
        if (empty($rule)) {
            throw new InvalidRuleForCountryCodeException($countryCode);
        }

        return $rule;
    }
}
