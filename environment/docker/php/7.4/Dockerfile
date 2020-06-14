FROM php:7.4-fpm

ARG USER_ID
ARG GROUP_ID

RUN apt-get update && apt-get install -y curl git unzip libcurl4-openssl-dev libzip-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql zip

ADD conf/php.ini /usr/local/etc/php/php.ini

RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN groupmod -o -g ${GROUP_ID} www-data && \
    usermod -o -u ${USER_ID} -g www-data www-data

USER "${USER_ID}:${GROUP_ID}"

WORKDIR /application
