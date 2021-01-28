FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade

RUN apt-get -y install php7.3 php7.3-fpm php7.3-mysql php7.3-json php7.3-mbstring
RUN apt-get -y install wget
RUN apt-get -y install wordpress
RUN apt-get -y install nginx
RUN apt-get -y install mariadb-server
RUN apt-get -y install openssl

COPY ./srcs/init_docker.sh ./srcs/init_database.sql /

COPY ./srcs/default /etc/nginx/sites-available

COPY ./srcs/ssl-params.conf ./srcs/self-signed.conf /etc/nginx/snippets/
COPY ./srcs/localhost.crt ./srcs/dhparam.pem /etc/ssl/certs/
COPY ./srcs/localhost.key /etc/ssl/private/localhost.key

COPY ./srcs/autoindex_* /

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz
RUN tar xvzf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin
RUN mv /usr/share/wordpress /var/www/html

COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/config.inc.php /var/www/html/phpMyAdmin

COPY ./srcs/init_docker.sh /

COPY ./srcs/index.html /var/www/html
COPY ./srcs/index.php /var/www/html

RUN chown -R www-data /var/www/html

EXPOSE 80 443

RUN service mysql start && mysql < init_database.sql

ENTRYPOINT bash init_docker.sh
