FROM php:8-cli
RUN docker-php-ext-install mysqli
COPY index.php /var/www/html
WORKDIR /var/www/html
CMD php -S 0.0.0.0:8090