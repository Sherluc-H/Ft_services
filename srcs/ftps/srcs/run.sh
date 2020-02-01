#! bin/sh
if [[ ! -d /home/user/ftp  ]]
then
	mkdir -p /srv/ftp
	chmod -R 777 /srv/ftp
	chmod 775 /srv
fi
