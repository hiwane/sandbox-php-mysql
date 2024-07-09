
FROM nginx:latest

# Install PHP and required extensions
RUN apt-get update && \
    apt-get install -y php-fpm php-mysql

# Copy Nginx configuration
COPY default.conf /etc/nginx/nginx.conf

# Set up volumes
VOLUME /usr/share/nginx/html

# Start PHP and Nginx
CMD service status --status-all
CMD ["nginx", "-g", "daemon off;"]
#CMD systemctl list-unit-files -t service

# CMD systemctl status php-fpm.service
#CMD service php8.2-fpm.service start
