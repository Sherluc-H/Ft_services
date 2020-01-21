FROM alpine
RUN apk update \
	&& apk add \
	&& apk add openssl \
	&& apk add vsftpd \
	&& apk add openrc
COPY ./srcs/ssl.info /
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/selfsigned.key -out /etc/ssl/certs/selfsigned.crt < ssl.info
RUN rm ssl.info
RUN mv /etc/vsftpd/vsftpd.conf /etc/vsftpd/vsftpd.conf_old
COPY ./srcs/vsftpd.conf /etc/vsftpd/
RUN mkdir -p /srv/ftp
RUN chmod -R 777 /srv/ftp
RUN chmod 775 /srv
RUN echo "test" > /srv/ftp/test.txt
ENTRYPOINT rc boot && rc-service vsftpd restart && /bin/sh
