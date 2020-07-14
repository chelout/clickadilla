FROM php:7.4-fpm-alpine

WORKDIR /var/www

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-install pdo pdo_mysql pcntl json posix calendar -j$(getconf _NPROCESSORS_ONLN) \
    && docker-php-ext-enable xdebug
