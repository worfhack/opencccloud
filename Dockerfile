FROM wordpress:latest
RUN apt-get update -y
COPY plugins/ /var/www/html/wp-content/plugins/
