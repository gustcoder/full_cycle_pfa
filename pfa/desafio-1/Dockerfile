FROM php:8-cli
RUN docker-php-ext-install mysqli
COPY . /var/www/app
WORKDIR /var/www/app
CMD php ListFullCycleModules.php