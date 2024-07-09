FROM nginx:latest

# RUN apt-get update -y && \
#     apt-get install -y php-fpm php-mysql

# Copy Nginx configuration
COPY default.conf /etc/nginx/nginx.conf

# Set up volumes
# VOLUME /usr/share/nginx/html

#EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]



