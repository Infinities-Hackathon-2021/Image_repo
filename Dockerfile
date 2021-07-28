FROM php:7.2-apache 
RUN apt-get update & apt-get upgrade -y
RUN docker-php-ext-install install
COPY ./hackathon /var/www/html/hackathon
RUN mkdir /secrets
RUN mkdir /secrets/php-app