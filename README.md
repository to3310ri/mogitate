# mogitate

## 環境構築

### Dockerビルド

```bash
git clone https://github.com/to3310ri/mogitate.git
cd mogitate
docker-compose up -d --build
```

### Laravel環境構築

```bash
docker-compose exec php bash

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate --seed
```

## 使用技術（実行環境）

- PHP 8.2
- Laravel 10
- MySQL 8.0
- Docker
- phpMyAdmin

## ER図

![ER図](./ER.png)

## URL

- 開発環境：http://localhost:8082/products
- phpMyAdmin：http://localhost:8081