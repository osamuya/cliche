<?php
echo "setup start...\n\n";

/**
 * Various permission settings
 */

/**
chmod 777 bootstrap/cache;
chmod 666 bootstrap/cache/services.php
chmod 666 storage/logs/laravel.log;
chmod 777 storage/
chmod 777 storage/logs;
chmod 777 storage/framework/views;
chmod 777 storage/framework/sessions;
chmod 777 storage/debugbar;
**/

if (is_dir("bootstrap/cache")) {
    chmod("bootstrap/cache", 0777);
    echo "chmod 777 bootstrap/cache\n";
}
if (is_file("bootstrap/cache/services.php")) {
    chmod("bootstrap/cache/services.php", 0666);
    echo "chmod 666 bootstrap/cache/services.php\n";
}
if (is_file("storage/logs/laravel.log")) {
    chmod("storage/logs/laravel.log", 0666);
    echo "chmod 666 storage/logs/laravel.log\n";
}
if (is_dir("storage")) {
    chmod("storage", 0777);
    echo "chmod 777 storage/\n";
}
if (is_dir("storage/logs")) {
    chmod("storage/logs", 0777);
    echo "chmod 777 storage/logs\n";
}
if (is_dir("storage/framework")) {
    chmod("storage/framework", 0777);
    echo "chmod 777 storage/framework\n";
}
if (is_dir("storage/framework/views")) {
    chmod("storage/framework/views", 0777);
    echo "chmod 777 storage/framework/views\n";
}
if (is_dir("storage/framework/sessions")) {
    chmod("storage/framework/sessions", 0777);
    echo "chmod 777 storage/framework/sessions\n";
}
if (is_dir("storage/debugbar")) {
    chmod("storage/debugbar", 0777);
    echo "chmod 777 storage/debugbar\n";
}



/**
 * .env
 */
if (!is_file(".env")) {
    copy(".env.example", ".env");
    exec("php artisan key:generate", $error);
}

/**
#!/usr/bin/bash

php composer.phar install
php composer.phar dump-autoload
php artisan clear-compiled
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:clear
rm -f bootstrap/cache/config.php
**/
echo "optimaz laravel all app....\n\n";
exec("php composer.phar install", $error);
exec("php composer.phar dump-autoload", $error);
exec("php artisan clear-compiled", $error);
exec("php artisan optimize", $error);
exec("php artisan config:cache", $error);
exec("php artisan view:clear", $error);
exec("rm -f bootstrap/cache/config.php", $error);


exec("php composer.phar require twbs/bootstrap", $error);

















