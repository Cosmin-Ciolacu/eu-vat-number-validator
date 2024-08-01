<?php

namespace CosminCiolacu\EuVatNumberValidator\Facades;

use Illuminate\Support\Facades\Facade;

class EuVatNumberValidator extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'eu-vat-number-validator';
    }
}
