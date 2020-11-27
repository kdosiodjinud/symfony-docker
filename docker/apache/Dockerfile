FROM httpd:2.4-alpine

RUN apk add --no-cache apache2-proxy vim bash

COPY ./docker/apache/files/httpd.conf /etc/apache2/httpd.conf


EXPOSE 80 443

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
