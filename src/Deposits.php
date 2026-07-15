<?php

declare(strict_types=1);

namespace AureEx;

/** Depósitos crypto — `/v1/deposits`. */
final class Deposits extends CrudResource
{
    public function __construct(HttpClient $http)
    {
        parent::__construct($http, '/deposits');
    }
}
