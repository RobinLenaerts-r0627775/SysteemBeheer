tar -zcvf /var/backups/extbackup.tar.gz /etc
rsync -v -e ssh /var/backups/extbackup.tar.gz r0627775@leia:
