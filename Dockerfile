FROM php:5.6-apache

# Precisamos configurar a extensão para MySQL
RUN docker-php-ext-install mysqli

# Além disso, precisamos de várias extensões recomendadas
# pelo instalador do Moodle
RUN apt-get update
RUN apt-get install -y libzip-dev zip
RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install zip
RUN apt-get install -y libpng-dev
RUN docker-php-ext-install gd
RUN apt-get install -y libxml2-dev
RUN docker-php-ext-install xmlrpc
RUN docker-php-ext-install soap
RUN docker-php-ext-install intl

# O instalador do Moodle também recomenda a diretiva abaixo
# para melhorar a performance
RUN docker-php-ext-configure opcache --enable-opcache
RUN docker-php-ext-install opcache
