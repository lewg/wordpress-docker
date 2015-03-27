FROM alpine:3.1
RUN apk add --update mysql-client lftp && rm -rf /var/cache/apk/*
WORKDIR /opt
ADD . /opt/
CMD sh
