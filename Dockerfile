FROM wordpress:latest
RUN apt-get update -y
RUN apt-get install -y libz-dev libmemcached-dev && \
    pecl install memcached && \
    docker-php-ext-enable memcached



