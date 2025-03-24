
FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    postgresql-client \       
    postgresql-dev \          
    && docker-php-ext-install pdo pdo_pgsql


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/symfony


COPY . .


RUN composer install


EXPOSE 80
