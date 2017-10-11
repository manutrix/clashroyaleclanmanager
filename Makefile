find ./ -printf "%p %M\n" | grep "\-rw\-r\-\-r\-\-" | awk '{print $1}' | while read line ; do chmod 664 $line ; done
chmod -R 777 storage
