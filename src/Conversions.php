<?php

declare(strict_types=1);

namespace AureEx;

/** Conversões crypto (ex.: USDT/BRL). */
final class Conversions extends CrudResource
{
    public function __construct(HttpClient $http)
    {
        parent::__construct($http, '/conversions');
    }

    /**
     * Cotação de conversão (POST /conversions/quote).
     *
     * @param array<string, mixed> $payload
     */
    public function quote(array $payload): mixed
    {
        return $this->http->request('POST', '/conversions/quote', $payload);
    }
}
