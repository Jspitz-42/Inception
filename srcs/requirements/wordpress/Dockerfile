FROM debian:bookworm

RUN apt update && apt install -y curl php-cli php-mysqli php-dom php-mbstring php-fpm default-mysql-client


RUN apt update -y && apt upgrade -y && apt install -y \
		php-mysqli \
		php-fpm \
		curl


COPY ./conf/www.conf /etc/php/8.2/fpm/pool.d/.

COPY ./tools/script.sh .
RUN chmod +x script.sh

EXPOSE 9000

CMD ["./script.sh"]