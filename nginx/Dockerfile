FROM nginx:latest

RUN apt-get update -y && \
    apt-get install -y php-fpm php-mysql

# Copy Nginx configuration
COPY default.conf /etc/nginx/nginx.conf
COPY php-fpm.conf /etc/php/8.2/fpm/pool.d/ci.conf

# Set up volumes
# VOLUME /usr/share/nginx/html

#EXPOSE 80

CMD (service --status-all) && \
	echo "=================" && \
	(service php8.2-fpm start) && \
	nginx -g 'daemon off;'




