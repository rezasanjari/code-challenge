FROM php:8.1-fpm

RUN apt update -y && apt upgrade -y
RUN apt install -y libzip-dev libpng-dev libgd-dev sox libsox-fmt-mp3
RUN docker-php-ext-install pdo_mysql zip gd

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Because dumb amazon linux had to install sox by hand, landing it in /usr/local
RUN ln -s /usr/bin/sox /usr/local/bin/sox
RUN ln -s /usr/bin/soxi /usr/local/bin/soxi

#install composer
WORKDIR ~
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN apt install -y unzip iputils-ping

RUN apt autoremove -y

WORKDIR /var/www/
