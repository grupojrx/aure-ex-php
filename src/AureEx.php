<?php

declare(strict_types=1);

namespace AureEx;

/**
 * Facade principal da API AureEX (PHP) — crypto only.
 */
final class AureEx
{
    public readonly Deposits $deposits;
    public readonly Withdrawals $withdrawals;
    public readonly Webhooks $webhooks;
    public readonly Company $company;
    public readonly Conversions $conversions;

    private readonly HttpClient $http;

    /**
     * @param array{apiKey: string, apiSecret: string, baseUrl?: string} $config Credenciais e base URL opcional
     */
    public function __construct(array $config)
    {
        $apiKey = trim((string) ($config['apiKey'] ?? ''));
        $apiSecret = trim((string) ($config['apiSecret'] ?? ''));

        if ($apiKey === '' || $apiSecret === '') {
            throw new AureExException('apiKey and apiSecret are required.');
        }

        $baseUrl = (string) ($config['baseUrl'] ?? 'https://api.aure-ex.com/v1');

        $this->http = new HttpClient($apiKey, $apiSecret, $baseUrl);
        $this->deposits = new Deposits($this->http);
        $this->withdrawals = new Withdrawals($this->http);
        $this->webhooks = new Webhooks($this->http);
        $this->company = new Company($this->http);
        $this->conversions = new Conversions($this->http);
    }
}
