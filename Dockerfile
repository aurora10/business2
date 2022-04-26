#FROM php:8.0.2
FROM php:7.3-fpm


RUN apt-get update -y && apt-get install -y openssl zip unzip git libonig-dev



RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chmod +x /usr/local/bin/composer
RUN docker-php-ext-install pdo mbstring pdo_mysql

WORKDIR /app
COPY . .

RUN composer update


#RUN composer install

CMD php artisan serve --host=0.0.0.0
EXPOSE 8000
CMD ["php-fpm"]