#!/bin/bash
connect='curl -sL -w "%{http_code}\\n" "54.158.91.82" -o /dev/null'
if [ "$connect" = "200" ];
then
sleep 15
/bin/bash testinet.sh
else
/bin/bash /etc/init.d/script.sh
fi