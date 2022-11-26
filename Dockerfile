FROM php:8.0-apache
WORKDIR /home/ubuntu/phpcrud
RUN apt install php8.0-mysql 
COPY . .
EXPOSE 80
