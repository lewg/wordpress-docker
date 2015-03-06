FROM nginx:1.7
EXPOSE 80
RUN apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0x5a16e7281be7a449
RUN echo deb http://dl.hhvm.com/debian wheezy main | tee /etc/apt/sources.list.d/hhvm.list
RUN apt-get update -qq && DEBIAN_FRONTEND=noninteractive apt-get install -y -q \
  mysql-client supervisor hhvm netcat-traditional
ADD restore-db.sh /opt/restore-db.sh
ADD supervisord.conf /etc/supervisor/supervisord.conf
ADD default.conf /etc/nginx/conf.d/default.conf
ADD webroot /srv/www
RUN chown -R root:root /srv/www
CMD supervisord
