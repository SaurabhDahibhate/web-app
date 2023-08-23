FROM nginx:stable-alpine

LABEL maintainer="Axay Gadekar"

ADD ./deploy/nginx/default.prod.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html

#ADD ./ /var/www/html
