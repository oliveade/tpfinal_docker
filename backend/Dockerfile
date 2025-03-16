FROM php:8.2-fpm-alpine
WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install pdo pdo_pgsql
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
