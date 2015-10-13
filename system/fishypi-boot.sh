 #! /bin/sh
# /etc/init.d/noip

### BEGIN INIT INFO
# Provides:          fishy pi bootup
# Required-Start:    $remote_fs $syslog
# Required-Stop:     $remote_fs $syslog
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: Sets are relaies to off on boot
# Description:       Based on a simple script from www.stuffaboutcode.com which will start / stop a program a boot / shutdown.
# Install:           Copy to /etc/init.d/ , chmod to +x , register it as a service
# More info:         See: http://www.stuffaboutcode.com/2012/06/raspberry-pi-run-program-at-start-up.html
### END INIT INFO

# If you want a command to always run, put it here

# Carry out specific functions when asked to by the system
case "$1" in
  start)
    echo "Starting fishypi"
    # run application you want to start
    php /var/www/fishypi/system/all-relay-off.php
    ;;
  stop)
    echo "Stopping fishypi"
    # kill application you want to stop
    php /var/www/fishypi/system/all-relay-off.php
    ;;
  *)
    echo "Usage: /etc/init.d/fishypi-boot.sh {start|stop}"
    exit 1
    ;;
esac

exit 0 
