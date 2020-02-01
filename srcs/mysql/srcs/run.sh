#! /bin/sh
if [[ ! -d /var/lib/mysql/wordpress ]]
then
	mysql_install_db --user=mysql --datadir=${DB_DATA_PATH}
	rc-service mariadb start
	mysql -u root < mysql_admin
	mysql -u root wordpress < wordpress_clean.sql
#	mysql -u root < change_ip
fi
