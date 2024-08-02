<?php

return [
    'rules' =>  [
        'AT' => '/^(?:AT)?U\d{8}$/',                     // Austria
        'BE' => '/^(?:BE)?\d{10}$/',                     // Belgium
        'BG' => '/^(?:BG)?\d{9,10}$/',                   // Bulgaria
        'HR' => '/^(?:HR)?\d{11}$/',                     // Croatia
        'CY' => '/^(?:CY)?\d{8}[A-Z]$/',                 // Cyprus
        'CZ' => '/^(?:CZ)?\d{8,10}$/',                   // Czech Republic
        'DK' => '/^(?:DK)?\d{8}$/',                      // Denmark
        'EE' => '/^(?:EE)?\d{9}$/',                      // Estonia
        'FI' => '/^(?:FI)?\d{8}$/',                      // Finland
        'FR' => '/^(?:FR)?\d{11}$|^(?:FR)?[A-Z0-9]{2}\d{9}$/',  // France
        'DE' => '/^(?:DE)?\d{9}$/',                      // Germany
        'EL' => '/^(?:EL)?\d{9}$/',                      // Greece
        'HU' => '/^(?:HU)?\d{8}$/',                      // Hungary
        'IE' => '/^(?:IE)?\d{7}[A-Z]{1,2}$|^(?:IE)?[A-Z]\d{7}[A-Z]$/', // Ireland
        'IT' => '/^(?:IT)?\d{11}$/',                     // Italy
        'LV' => '/^(?:LV)?\d{11}$/',                     // Latvia
        'LT' => '/^(?:LT)?\d{9}$|^(?:LT)?\d{12}$/',           // Lithuania
        'LU' => '/^(?:LU)?\d{8}$/',                      // Luxembourg
        'MT' => '/^(?:MT)?\d{8}$/',                      // Malta
        'NL' => '/^(?:NL)?\d{9}B\d{2}$/',                // Netherlands
        'PL' => '/^(?:PL)?\d{10}$/',                     // Poland
        'PT' => '/^(?:PT)?\d{9}$/',                      // Portugal
        'RO' => '/^(?:RO)?\d{2,10}$/',                   // Romania
        'SK' => '/^(?:SK)?\d{10}$/',                     // Slovakia
        'SI' => '/^(?:SI)?\d{8}$/',                      // Slovenia
        'ES' => '/^(?:ES)?[A-Z]\d{7}[A-Z]$/',            // Spain
        'SE' => '/^(?:SE)?\d{12}$/'                      // Sweden
    ],
    'generic_rule' => '/^\d{8,15}$/'
];