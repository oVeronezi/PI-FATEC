FROM php:8.2-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2enmod rewrite

COPY . /var/www/html/

RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf