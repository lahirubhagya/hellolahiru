FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev nginx \
    libpng-dev libonig-dev libxml2-dev nodejs npm \
    && docker-php-ext-install pdo pdo_mysql mysqli mbstring zip gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN cp .env.example .env

RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs --no-scripts

RUN git config --global url."https://github.com/".insteadOf git@github.com: \
    && git config --global url."https://".insteadOf ssh://git@

RUN rm -rf node_modules

RUN npm install --legacy-peer-deps && npm run production

RUN php artisan key:generate --force

RUN chown -R www-data:www-data /var/www/html/storage \
    /var/www/html/bootstrap/cache

RUN echo 'server { \n\
    listen 80; \n\
    root /var/www/html/public; \n\
    index index.php; \n\
    location / { try_files $uri $uri/ /index.php?$query_string; } \n\
    location ~ \.php$ { \n\
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock; \n\
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; \n\
        include fastcgi_params; \n\
    } \n\
}' > /etc/nginx/sites-available/default

RUN mkdir -p /var/run/php

COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
CMD ["/start.sh"]
```

Also **permanently fix** by adding to your `.gitignore`:
```
node_modules/
vendor/