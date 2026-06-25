#!/bin/sh
set -e

echo "Fix permissions..."

chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

echo "Starting PHP-FPM..."
exec php-fpm