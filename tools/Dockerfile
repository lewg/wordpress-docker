FROM alpine:3.2
RUN apk add --update mysql-client lftp openssh && rm -rf /var/cache/apk/*
ADD . /opt/
WORKDIR /opt
CMD sh
