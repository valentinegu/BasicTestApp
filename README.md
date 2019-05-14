# BasicTestApp

This is a small PHP application that prints request and response headers upon entry.

to run on a new debian based server use the following steps 
* Update local applications and repositories
* install Apache2
* install PHP
* install PHP module for apache
* download the content of this GIT
* remove all the configuration example from newly installed apache
* copy the site config to apache
* copy the site content to apache
* provide execute permissions to the script inside WWW directory 
* restart apache service 

```
# apt-get update -y && apt-get install apache2 php libapache2-mod-php -y
# git clone https://github.com/valentinegu/BasicTestApp.git
# rm -rf /etc/apache2/sites-enabled/*
# rm -rf /etc/apache2/sites-available/*
# cp BasicTestApp/apache-conf/* /etc/apache2/sites-enabled/
# cp BasicTestApp/apache-conf/* /etc/apache2/sites-available/
# cp BasicTestApp/html/* /var/www/html/
# chmod +x /var/www/html/extload.sh
# service apache2 restart
```
