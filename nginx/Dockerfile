FROM php:7.4-fpm

# Install required extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy Nginx configuration
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# Install Nginx
RUN apt-get update && apt-get install -y nginx

# Start Nginx and PHP-FPM
CMD service php7.4-fpm start && nginx -g 'daemon off;'
