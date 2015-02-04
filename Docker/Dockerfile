FROM nginx:1.7.9
EXPOSE 80
RUN apt-get update -qq && DEBIAN_FRONTEND=noninteractive apt-get install -y -q \
  mysql-client supervisor php5-fpm php-pear php5-mysql php5-memcache netcat-traditional \
  php5-curl
ADD restore-db.sh /opt/restore-db.sh
ADD supervisord.conf /etc/supervisor/supervisord.conf
ADD default.conf /etc/nginx/conf.d/default.conf
ADD www.conf /etc/php5/fpm/pool.d/www.conf
CMD supervisord
