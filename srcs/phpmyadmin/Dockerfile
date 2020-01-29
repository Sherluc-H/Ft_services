FROM alpine
RUN apk update \
	&& apk add \
	&& apk add openrc \
	&& apk add nginx \
	&& apk add php7 php7-fpm php7-opcache \
	&& apk add php7-gd php7-mysqli php7-zlib php7-curl \
	&& apk add php7-bz2 php7-mbstring php7-session libzip php7-zip \
	&& apk add php7-common php7-iconv php7-json php7-gd php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom \
	&& apk add wget \
	&& apk add vim
RUN mv /etc/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf_old
COPY ./srcs/default.conf /etc/nginx/conf.d
COPY ./srcs/nginx.conf /etc/nginx
COPY ./srcs/index.php /var/www/localhost/htdocs/
RUN cd /var/www/localhost/htdocs \
	&& wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-all-languages.tar.gz \
	&& tar -zxvf phpMyAdmin-4.9.4-all-languages.tar.gz \
	&& mv phpMyAdmin-4.9.4-all-languages phpmyadmin \
	&& rm  phpMyAdmin-4.9.4-all-languages.tar.gz
COPY ./srcs/config.inc.php /var/www/localhost/htdocs/phpmyadmin
RUN cd /var/www/localhost/htdocs/phpmyadmin && mkdir tmp && chmod 777 tmp
RUN rc boot
RUN rc-update add nginx default
RUN rc-update add php-fpm7 default
#RUN cd /etc/nginx/ && echo "daemon off;" > tmp && cat nginx.conf >> tmp && cat tmp > nginx.conf
ENTRYPOINT rc-service php-fpm7 restart && rc-service nginx restart && /bin/sh
