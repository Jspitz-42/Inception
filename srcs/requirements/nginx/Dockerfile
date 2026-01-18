FROM debian:bookworm

#install
RUN	apt update -y && apt upgrade -y
RUN apt install -y nginx \
					  openssl

# nginx SSL
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
    -out /etc/nginx/ssl/jspitz.crt \
    -keyout /etc/nginx/ssl/jspitz.key \
    -subj "/C=FR/ST=Paris/L=Paris/0=42 School/OU=jspitz/CN=jspitz/"

# COPY default /etc/nginx/sites-available/.
COPY ./conf/default.conf /etc/nginx/conf.d/my_default.conf
COPY ./tools/certs.sh ./certs.sh
RUN chmod +x certs.sh

COPY ./conf/default.conf /etc/nginx/sites-available/default.conf
# nginx config
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
RUN chmod 755 /var/www/html/**
RUN mkdir -p /run/nginx

# port allowed
EXPOSE 443

# start
CMD ["nginx", "-g", "daemon off;"]
