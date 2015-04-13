FROM alpine:3.1
RUN apk add --update mysql-client lftp openssh && rm -rf /var/cache/apk/*
WORKDIR /srv/www
ADD . /opt/
CMD sh
