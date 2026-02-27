FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev \
    libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring zip gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

RUN sed -i 's|/var/www/html|/var/www/html/public|g' \
    /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html/storage \
    /var/www/html/bootstrap/cache

EXPOSE 80