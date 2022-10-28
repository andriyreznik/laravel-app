FROM php:alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo_mysql

WORKDIR /app
COPY . /app

RUN composer install

CMD [ "/bin/sh" ]
