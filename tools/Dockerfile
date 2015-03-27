FROM alpine:3.1
RUN apk add --update mysql-client && rm -rf /var/cache/apk/*
ADD restore-db.sh /opt/restore-db.sh
CMD sh /opt/restore-db.sh
