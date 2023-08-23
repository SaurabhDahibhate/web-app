FROM php:8-fpm-alpine

LABEL maintainer="Axay Gadekar"

ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN mkdir -p /var/www/html

# supervisor
RUN apk update && apk add --no-cache \
    build-base shadow supervisor

RUN docker-php-ext-install pdo pdo_mysql pcntl

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
    libzip-dev \
    zip \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del pcre-dev ${PHPIZE_DEPS}

RUN docker-php-ext-install zip

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Set working directory
WORKDIR /var/www/html

COPY ./supervisord.conf /etc/supervisord.conf
COPY ./supervisor.d /etc/supervisor.d

ENV ENABLE_CRONTAB 0
ENV ENABLE_HORIZON 0
# ENV ENABLE_WORKER 1 # no need  to enable worker here as Horizon will create and manage workers itself
# ENV CURRENT_USER www-data

ENTRYPOINT ["sh", "/var/www/html/deploy/docker-entrypoint.sh"]

CMD supervisord -n -c /etc/supervisord.conf

RUN chown laravel:laravel /var/www/html
