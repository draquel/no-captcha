<?php

return [
    'secret' => env('NOCAPTCHA_SECRET',(isset($_SERVER['NOCAPTCHA_SECRET']) ? $_SERVER['NOCAPTCHA_SECRET'] : NULL)),
    'sitekey' => env('NOCAPTCHA_SITEKEY',(isset($_SERVER['NOCAPTCHA_SITEKEY']) ? $_SERVER['NOCAPTCHA_SITEKEY'] : NULL)),
    'options' => [
        'timeout' => 2.0,
    ],
];
