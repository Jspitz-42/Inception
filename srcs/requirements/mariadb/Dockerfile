FROM debian:bookworm

RUN apt-get update -y; apt-get upgrade -y

RUN apt-get install -y mariadb-server procps

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY ./tools/init.sql /etc/mysql/init.sql

RUN mkdir /run/mysqld

EXPOSE 3306

CMD ["mysqld_safe"]
