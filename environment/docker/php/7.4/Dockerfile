FROM php:7.4-fpm

RUN apt-get update && apt-get install -y curl git unzip libcurl4-openssl-dev libzip-dev \
    && pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql zip

ADD conf/php.ini /usr/local/etc/php/php.ini

RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

WORKDIR /application
