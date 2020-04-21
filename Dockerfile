FROM jdecode/kode:latest

COPY . /var/www/html/

RUN composer install -n --prefer-dist

