FROM alpine
RUN apk update \
	&& apk add \
	&& apk add openrc \
	&& apk add mariadb mariadb-client \
	&& apk add vim
RUN DB_DATA_PATH="/var/lib/mysql" \
	&& DB_ROOT_PASS="mariadb_root_password" \
	&& DB_USER="mariadb_user" \
	&& DB_PASS="mariadb_user_password" \
	&& MAX_ALLOWED_PACKET="200M" \
	&& mysql_install_db --user=mysql --datadir=${DB_DATA_PATH}
COPY ./srcs/mariadb-server.cnf /etc/my.cnf.d
RUN rc boot
COPY ./srcs/run.sh /
COPY ./srcs/mysql_admin /
RUN rc-update add mariadb default
COPY ./srcs/maria_default_run /etc/runlevels/default
#COPY ./srcs/wordpress.sql /
RUN rc-service mariadb start && ./run.sh
RUN cd /etc/runlevels/default && cat maria_default_run > mariadb
ENTRYPOINT rc-service mariadb restart && /bin/sh
#ENTRYPOINT /bin/sh
