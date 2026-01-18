#!/bin/bash

#sed -i "s/my_cert/$ssl_certificate/g" /etc/nginx/sites-available/default
#sed -i "s/my_key/$ssl_certificate_key/g" /etc/nginx/sites-available/default
#sed -i "s/DOMAIN_NAME/$nginx_domain/g" /etc/nginx/sites-available/default   

echo "127.0.0.1	jspitz.42.fr" >> /etc/hosts
echo "127.0.0.1	www.jspitz.42.fr" >> /etc/hosts

nginx -g "daemon off;"