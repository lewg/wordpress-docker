FROM lewg/hhvm
EXPOSE 80
ADD https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar /usr/local/bin/wp
RUN chmod +x /usr/local/bin/wp
ADD webroot /srv/www
CMD supervisord -e debug
