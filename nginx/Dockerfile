
FROM nginx:latest

# Install PHP and required extensions
RUN apt-get update && \
    apt-get install -y php-fpm php-mysql

# Copy Nginx configuration
COPY default.conf /etc/nginx/nginx.conf

# Set up volumes
VOLUME /usr/share/nginx/html

# Start PHP and Nginx
CMD nginx -g 'daemon off;'
CMD systemctl status php-fpm.service
