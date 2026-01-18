#!/bin/bash

cd /tmp

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar


rm -rf /var/www/html/*

./wp-cli.phar --path=/var/www/html core download --allow-root

./wp-cli.phar --path=/var/www/html config create \
  --dbname=$DB_NAME \
  --dbuser=$DB_USER \
  --dbpass=$DB_PASSWORD \
  --dbhost=$DB_HOST \
  --allow-root

./wp-cli.phar --path=/var/www/html core install \
  --url=$URL_URL \
  --title=$TITLE_TITLE \
  --admin_user=$ADMIN_USER_USER \
  --admin_password=$WP_PASSWORD \
  --admin_email=$ADMIN_EMAIL_EMAIL \
  --allow-root

php-fpm8.2 -F
