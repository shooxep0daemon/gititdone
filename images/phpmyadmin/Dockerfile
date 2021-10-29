FROM debian:buster
RUN apt-get update && apt-get install wget -y
RUN wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz
RUN mkdir pma && sudo tar xvf phpMyAdmin-latest-all-languages.tar.gz --strip-components=1 -C pma
