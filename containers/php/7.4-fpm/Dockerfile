FROM php:7.4-fpm

RUN apt-get update && apt-get install -y wget \
    && pecl install xdebug-2.8.1 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql

ADD ./conf/php.ini /usr/local/etc/php/php.ini

RUN wget https://getcomposer.org/installer -O - -q \
    | php -- --install-dir=/bin --filename=composer --quiet

ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /application
