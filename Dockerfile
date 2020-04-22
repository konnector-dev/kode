FROM jdecode/kode:2.1

## Run following when a composer dependency is changed
#COPY composer.json /var/www/html/
#RUN composer install -n --prefer-dist

## Run following when npm dependency is changed
#COPY package.json /var/www/html/
#RUN npm install

COPY . /var/www/html

## Disabled following when running locally (keep it enabled for GCP Cloud Run)
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

#change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

#change ownership of our applications
RUN chown -R www-data:www-data /var/www/html/tmp /var/www/html/logs

#RUN npm -v
#RUN nodejs -v
#RUN node -v
