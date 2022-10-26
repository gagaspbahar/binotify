FROM php:8.0-apache
COPY . /var/www/html

RUN apt-get update

RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pgsql pdo pdo_pgsql

RUN sed -E -i -e 's/post_max_size = 8M/post_max_size = 10M/' /usr/local/etc/php/php.ini-production \
    && sed -E -i -e 's/upload_max_filesize = 2M/upload_max_filesize = 10M/' /usr/local/etc/php/php.ini-production

RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

RUN service apache2 restart