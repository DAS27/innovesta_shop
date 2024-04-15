FROM php:8.2-rc-fpm-alpine3.19

RUN apk update && apk add --no-cache $PHPIZE_DEPS \
    mysql-client \
    libzip-dev \
    zip \
    libpng-dev \
    imagemagick-dev \
    linux-headers \
    && docker-php-ext-install pdo pdo_mysql mysqli pcntl bcmath zip gd \
    && pecl install imagick \
    && docker-php-ext-enable imagick

RUN apk add --update nodejs npm

WORKDIR /var/www

COPY ./ /var/www

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN npm install

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

CMD ["php-fpm"]
