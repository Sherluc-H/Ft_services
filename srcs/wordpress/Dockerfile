FROM alpine
RUN apk update \
	&& apk add \
	&& apk add openrc \
	&& apk add nginx \
	&& apk add php7 php7-fpm php7-opcache \
	&& apk add php7-gd php7-mysqli php7-zlib php7-curl \
	&& apk add php7-common php7-iconv php7-json php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom \
	&& apk add wget \
	&& apk add vim
RUN mv /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf_old
COPY ./srcs/default.conf /etc/nginx/conf.d
COPY ./srcs/index.php /var/www/localhost/htdocs
RUN cd /var/www/localhost/htdocs \
	&& wget https://fr.wordpress.org/latest-fr_FR.tar.gz \
	&& tar -xzvf latest-fr_FR.tar.gz \
	&& rm latest-fr_FR.tar.gz
RUN rc boot
RUN rc-update add nginx default
RUN rc-update add php-fpm7 default
#RUN rc-service nginx restart
#RUN rc-service php-fpm7 restart
COPY ./srcs/run.sh /
ENTRYPOINT ./run.sh && /bin/sh
