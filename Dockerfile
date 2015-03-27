FROM lewg/hhvm
EXPOSE 80
ADD webroot /srv/www
CMD supervisord -e debug
