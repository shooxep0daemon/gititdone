FROM debian:buster
RUN apt-get update && apt-get upgrade
RUN apt -y install lsb-release apt-transport-https ca-certificates wget
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN apt update && apt -y install php7.4 && apt -y install php7.4-{fpm,bcmath,bz2,intl,gd,mbstring,mysql,zip}
RUN a2enmod proxy_fcgi setenvif
RUN a2enconf php7.4-fpm
RUN service apache2 reload
