FROM alpine
RUN apk update \
	&& apk add \
	&& apk add nginx \
	&& apk add openssl \
	&& apk add openssh \
	&& apk add openrc
COPY ./srcs/ssl.info /
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt < ssl.info
RUN rm ssl.info
RUN mkdir -p /run/nginx
RUN mv /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf_old
COPY ./srcs/default.conf /etc/nginx/conf.d
RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf_old
COPY ./srcs/nginx.conf /etc/nginx
RUN mkdir -p /var/www/html
COPY ./srcs/index.html /var/www/html
COPY ./srcs/run.sh /
COPY ./srcs/root.info /
COPY ./srcs/sshd_config /etc/ssh
ENTRYPOINT ./run.sh && rc-update add sshd && rc boot && nginx && /bin/sh
