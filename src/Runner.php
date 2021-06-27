<?php

require_once __DIR__ . '../vendor/autoload.php';

namespace Pasechneek\Src\Runner\Php;

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}