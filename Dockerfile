FROM php:8.2-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev libonig-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring

WORKDIR /app
COPY . /app

RUN composer install

EXPOSE 8000
CMD symfony server:start --port=8000
