FROM php:alpine

RUN apk --no-cache --update add nodejs npm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql

WORKDIR /app
COPY . /app

RUN composer install

CMD [ "/bin/sh" ]
