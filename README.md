# aure-ex/sdk

SDK oficial da API AureEX para PHP.

## Instalação

```bash
composer require aure-ex/sdk
```

## Uso

```php
<?php

use AureEx\AureEx;

$aureEx = new AureEx([
    'apiKey' => getenv('AUREEX_API_KEY'),
    'apiSecret' => getenv('AUREEX_API_SECRET'),
]);

$aureEx->deposits->create([
    'method' => 'usdt',
    'reference' => 'order-1',
    'amount' => 10000,
]);

$aureEx->webhooks->list();
$aureEx->company->balance();
$aureEx->conversions->quote(['from' => 'USDT', 'to' => 'BRL', 'amount' => 100]);
```

## Mapa de métodos

| SDK | HTTP |
| --- | --- |
| `$aureEx->deposits` | `/v1/deposits` |
| `$aureEx->withdrawals` | `/v1/withdrawals` |
| `$aureEx->webhooks` | `/v1/webhooks` |
| `$aureEx->company->get()` / `balance()` | `/v1/company`, `/v1/company/balance` |
| `$aureEx->conversions` / `quote()` | `/v1/conversions`, `/v1/conversions/quote` |

Docs: https://api.aure-ex.com/docs/sdks  
OpenAPI: https://api.aure-ex.com/openapi.yaml
