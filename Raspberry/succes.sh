#!/bin/bash
sudo rm json.php
sudo rm upload.php
wget http://54.158.91.82/btwoone/json.php
wget http://54.158.91.82/btwoone/upload.php
#sshpass -p 'btwoone' scp btwoone@54.158.91.82:json.php /home/pi
#sshpass -p 'btwoone' scp btwoone@54.158.91.82:upload.php /home/pi
sudo chmod 777 /home/pi/json.php
sudo chmod 777 /home/pi/upload.php
