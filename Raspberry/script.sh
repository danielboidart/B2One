#!/bin/sh

### BEGIN INIT INFO
# Provides: script
# Required-Stop: $local_fs $network
# Required-Start: $local_fs
# Default-Start: 2 3 4 5
# Default-Stop: 0 1 6
# Short-Description: begin
# Description : beginning
### END INIT INFO

connect=`curl -sL -w "%{http_code}\\n" "54.158.91.82" -o /dev/null`
if [ "$connect" = "200" ];
then
/bin/bash /home/pi/succes.sh
else
sleep 15
/bin/bash /etc/init.d/script.sh
fi

case "$1" in
	start)
		/bin/bash /etc/init.d/script.sh
		echo 'le script a été lancé' >> /home/pi/Desktop/test.txt
	;;
	
	stop)
		echo 'le script a été arreté' >> /home/pi/Desktop/test.txt
	;;
	
	*)
		echo 'Usage: /etc/init.d/test {start|stop}'
		exit 1
	;;
esac

exit 0
