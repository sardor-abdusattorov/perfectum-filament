#!/bin/sh
set -e

cd /var/www/backend

chown -R www-data:www-data vendor storage bootstrap/cache 2>/dev/null || true

if [ ! -f vendor/autoload.php ]; then
    echo "[entrypoint] composer install..."
    rm -rf vendor/* vendor/.[!.]* 2>/dev/null || true

    COMPOSER_MAX_PARALLEL_DOWNLOADS=1 composer install \
        --no-interaction \
        --prefer-dist \
        --optimize-autoloader
fi

if [ ! -f .env ]; then
    echo "[entrypoint] WARNING: .env отсутствует — копирую .env.example"
    cp .env.example .env || true
fi

if ! grep -q "^APP_KEY=base64:" .env 2>/dev/null; then
    echo "[entrypoint] generating APP_KEY..."
    php artisan key:generate --force
fi

if [ ! -L public/storage ]; then
    php artisan storage:link || true
fi

if [ "$1" = "php-fpm" ]; then
    if [ "${INIT_PROJECT:-0}" = "1" ]; then
        echo "[entrypoint] INIT_PROJECT=1 → running project:init (DESTRUCTIVE)"
        php artisan project:init
    else
        echo "[entrypoint] running project:update..."
        php artisan project:update
    fi
fi

chown -R www-data:www-data vendor 2>/dev/null || true

echo "[entrypoint] starting: $@"
exec "$@"