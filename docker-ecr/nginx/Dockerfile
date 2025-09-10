FROM nginx:1.29-alpine-slim
RUN apk update && apk upgrade --no-cache
WORKDIR /var/www/html
COPY . /var/www/html
COPY ./docker-ecr/nginx/default.conf /etc/nginx/conf.d/default.conf