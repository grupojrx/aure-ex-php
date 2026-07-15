<?php

declare(strict_types=1);

namespace AureEx;

/** Saques crypto — `/v1/withdrawals`. */
final class Withdrawals extends CrudResource
{
    public function __construct(HttpClient $http)
    {
        parent::__construct($http, '/withdrawals');
    }
}
