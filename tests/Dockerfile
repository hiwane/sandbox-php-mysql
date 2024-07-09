FROM php:7.4-apache

RUN docker-php-ext-install pdo pdo_mysql


# Enable mod_rewrite
RUN a2enmod rewrite

# Allow .htaccess files
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

