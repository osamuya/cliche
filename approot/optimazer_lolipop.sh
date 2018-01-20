#!/usr/bin/bash

# optimazer
/usr/local/php/7.1/bin/php composer.phar install
/usr/local/php/7.1/bin/php composer.phar dump-autoload
/usr/local/php/7.1/bin/php artisan clear-compiled
/usr/local/php/7.1/bin/php artisan optimize
/usr/local/php/7.1/bin/php artisan config:cache
/usr/local/php/7.1/bin/php artisan route:cache
/usr/local/php/7.1/bin/php artisan view:clear
rm -f bootstrap/cache/config.php

# setting
/usr/local/php/7.1/bin/php artisan storage:link