FROM jdecode/kode:latest

COPY . /var/www/html/

RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

RUN composer install -n --prefer-dist

