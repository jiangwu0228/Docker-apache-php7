FROM php:7.2-apache
COPY src/ /var/www/html/
EXPOSE 80
RUN docker-php-ext-install pdo_mysql