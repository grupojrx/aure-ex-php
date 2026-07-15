<?php

declare(strict_types=1);

namespace AureEx;

/** Base dos recursos da facade. */
abstract class Resource
{
    public function __construct(protected readonly HttpClient $http)
    {
    }
}
