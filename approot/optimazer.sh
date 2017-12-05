#!/usr/bin/bash

php composer.phar install
php composer.phar dump-autoload
php artisan clear-compiled
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:clear
rm -f bootstrap/cache/config.php
