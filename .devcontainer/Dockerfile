FROM php:alpine

RUN apk --no-cache --update add git nodejs npm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql

COPY composer.json composer.lock ./

# RUN composer install

WORKDIR /workspace

CMD [ "/bin/sh" ]
