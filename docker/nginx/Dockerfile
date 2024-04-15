FROM nginx:stable-alpine3.17

#COPY nginx.conf /etc/nginx/
COPY /docker/nginx/default.conf /etc/nginx/conf.d/

RUN apk update && apk upgrade && apk add --no-cache bash

ARG PHP_UPSTREAM_CONTAINER=app
ARG PHP_UPSTREAM_PORT=9000

# Set upstream conf and remove the default conf
RUN echo "upstream php-upstream { server ${PHP_UPSTREAM_CONTAINER}:${PHP_UPSTREAM_PORT}; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80
