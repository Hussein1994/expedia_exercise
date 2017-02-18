FROM php:5.6-apache
RUN docker-php-source extract \
&& apt-get update \
&& apt-get install libmcrypt-dev libldap2-dev nano libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng12-dev -y \
&& rm -rf /var/lib/apt/lists/* \
&& docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu \
&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
&& docker-php-ext-install ldap mcrypt gd \
&& a2enmod rewrite \
&& a2enmod ssl \
&& docker-php-source delete