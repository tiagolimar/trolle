# SETUP LARAVEL / MYSQL

Uma base de aplicação laravel, com Docker, Nginx e Mysql para estudos em PHP Orientado a objetos, com o framework Laravel.

Essa estrutura já está dockerizada, então basta ter o docker compose rodando em seu computador que é pra dar tudo certo.

## Tecnologias

- PHP 8.3
- MySQL
- nginx
- Laravel 11

## Como usar

Basta rodar o docker

`docker-compose up -d`

Entre no container:

`docker-compose exec -it nome_container_php bash`

E execute o composer install:

`composer install`

Você também precisa gerar a chave da aplicação:

`php artisan key:generate`

Aplique as migrações:

`php artisan migrate`

Finalmente crie uma arquivo .env a partir de .env.example:

`cp .env.example .env`

Pronto, agora acesse o http://localhost:8080
