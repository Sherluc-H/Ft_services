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
RUN rc boot
RUN rc-update add vsftpd default
RUN mv /etc/runlevels/default/vsftpd /etc/runlevels/default/vsftpd_old
COPY ./srcs/vsftpd /etc/runlevels/default
RUN cd /etc/runlevels/default && cat vsftpd > vsftpd_old
#ENTRYPOINT rc-service vsftpd restart && /bin/sh
ENTRYPOINT vsftpd /etc/vsftpd/vsftpd.conf && /bin/sh
#ENTRYPOINT /bin/sh
