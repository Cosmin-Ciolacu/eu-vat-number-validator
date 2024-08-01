<?php

namespace CosminCiolacu\EuVatNumberValidator\Exceptions;

class InvalidRuleForCountryCodeException extends \Exception
{
    public function __construct(string $countryCode)
    {
        parent::__construct("No validation rule found for country code: $countryCode");
    }
}
