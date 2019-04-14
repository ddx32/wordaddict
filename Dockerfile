FROM php:7.2-apache-stretch
SHELL ["/bin/bash", "-c"]

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN pecl install xdebug-stable && docker-php-ext-enable xdebug
COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www
RUN mv html public
ENV APACHE_DOCUMENT_ROOT /var/www/public

RUN apt-get update && apt-get install nano

# Setup DOCUMENT_ROOT
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . .
CMD ["apachectl", "-D", "FOREGROUND"]
EXPOSE 80
