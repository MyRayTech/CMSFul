FROM php:7.0-alpine
COPY . /var/www/html/
WORKDIR /var/www/html/web/
COPY ./php.ini /usr/local/etc/php/
CMD [ "php", "./index.php" ]