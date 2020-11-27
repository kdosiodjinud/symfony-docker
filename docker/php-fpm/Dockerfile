FROM php:7.4-fpm-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

COPY ./docker/php-fpm/wait-for-it /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it

#COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN curl -sS https://getcomposer.org/composer-1.phar -o /usr/bin/composer && chmod 700 /usr/bin/composer

RUN apk --update --no-cache add vim bash

RUN install-php-extensions pdo_pgsql http

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www

CMD composer install ; wait-for-it postgres:5432 -- bin/console doctrine:migrations:migrate ; php-fpm

EXPOSE 9000
