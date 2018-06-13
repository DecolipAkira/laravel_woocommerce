# Laravel WooCommerce
Esta é uma biblioteca para facilitar a integração com a API do WooCommerce utilizando o framework Laravel.
## Instalando...
### Primeira etapa: Instalar utilizando Composer
Faça a instalação da biblioteca no seu projeto executando o seguinte comando:
```bash
$ composer require decolipakira/laravel_woocommerce
```
### Segunda etapa: Adicionar o _ServiceProvider_ e a _Facade_
*Obs:* Esta etapa não é necessária se a versão do seu `Laravel` for maior ou igual a `5.5`

Adicione o _ServiceProvider_ em `config/app.php`:
```php
'providers' => [
    ...
    DecolipAkira\WooCommerce\WooCommerceServiceProvider::class,
    ...
]
```
Adicione a _Facade_ em `config/app.php`:
```php
'aliases' => [
    ...
    'WooCommerce' => DecolipAkira\WooCommerce\Facades\WooCommerce::class,
    ...
]
```
## Terceira etapa: Publicando configurações
Execute o comando a seguir para publicar as configurações da biblioteca:
```bash
$ php artisan vendor:publish --provider="DecolipAkira\WooCommerce\WooCommerceServiceProvider"
```
## Quarta etapa: Adicionando _Environment Variables_
Adicione as seguintes variáveis no arquivo `.env` de acordo com suas necessidades:

| Variavel | Valor Padrão | Descrição |
| :--- | :---: | :--- |
| WOOCOMMERCE\_URL | `null` | URL da sua Loja. exemplo: https://loja.clubegreens.com |
| WOOCOMMERCE\_CONSUMER\_KEY | `null` | Consumer Key da sua API do WooCommerce |
| WOOCOMMERCE\_CONSUMER\_SECRET | `null` | Consumer Secret da sua API do WooCommerce |
| WOOCOMMERCE\_WP\_API | `null` | Autorizar solicitações à nova API WP REST |
| WOOCOMMERCE\_WP\_API\_PREFIX | `null` | Prefixo personalizado para URL da API WP REST |
| WOCOMMERCE\_VERSION | `wc/v2` | Versão da sua API do WooCommerce |
| WOOCOMMERCE\_TIMEOUT | `15` | Tempo para _timeout_ |
| WOOCOMMERCE\_VERIFY\_SSL | `true` | Verificar SSL ao conectar |
| WOOCOMMERCE\_QUERY\_STRING\_AUTH | `false` | Forçar _Basic Authentication_ |
| WOOCOMMERCE\_OAUTH\_TIMESTAMP | `time()` | `OAuth TimeStamp` personalizado |
| WOOCOMMERCE\_USER\_AGENT | `WooCommerce API Client-PHP` | `User-Agent` personalizado |

# Utilizando...
Não esqueça de utilizar o namespace:
```php
use WooCommerce;
```

## GET
```php
WooCommerce::get($endpoint, $parameters = []);
```

## POST
```php
WooCommerce::post($endpoint, $data);
```

## PUT
```php
WooCommerce::put($endpoint, $data);
```

## DELETE
```php
WooCommerce::delete($endpoint, $parameters = []);
```

## OPTIONS
```php
WooCommerce::options($endpoint);
```

# Exemplo de uso...
Listando pedidos:
```php
use WooCommerce;

$pedidos = WooCommerce::get('orders', [
    'page'      => 3,
    'per_page'  => 20,
    'order'     => 'id',
    'orderby'   => 'desc'
]);
```


# Mais exemplos...

Para mais exemplos consulte a [Documentação da API REST do WooCommerce](https://woocommerce.github.io/woocommerce-rest-api-docs).


# Licença
Licença MIT(MIT License). Por favor verifique o [arquivo de licença](LICENSE.md) para mais detalhes.