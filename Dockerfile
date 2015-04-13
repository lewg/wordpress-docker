FROM lewg/hhvm
EXPOSE 80
ADD tools/wp-cli-0.18.0.phar /usr/local/wp
RUN chmod +x /usr/local/wp
ADD webroot /srv/www
CMD supervisord -e debug
