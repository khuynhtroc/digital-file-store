FROM php:8.1-fpm
RUN apt-get update && apt-get install -y git zip unzip libpng-dev libonig-dev libxml2-dev default-mysql-client     && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html
COPY . /var/www/html
RUN composer install --no-interaction || true
RUN chown -R www-data:www-data /var/www/html
CMD ["php-fpm"]
