# php
Pruebas y ejercicios con PHP

##Install apache+php+mysql+phpmyadmin
*sudo apt-get install apache2  
*sudo apt-get install php5 libapache2-mod-php5  
*sudo apt-get install mysql-server  
*sudo apt-get install php5-mysql php5-curl php5-gd php5-idn php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-snmp php5-sqlite php5-tidy php5-xmlrpc php5-xsl  
*sudo apt-get install phpmyadmin  
*Añadir en /etc/apache2/apache2.conf: Include /etc/phpmyadmin/apache.conf  

##Sublime Text 3
<http://wasil.org/sublime-text-3-perfect-php-development-set-up>  

##show errors on web browser
http://www.phptherightway.com/#error_reporting  

##Install composer globaly
*curl -sS https://getcomposer.org/installer | php  
*sudo mv composer.phar /usr/local/bin/composer  

##Install Slim & use
*Install into proyect  
	composer require slim/slim  
*Use  
	require 'vendor/autoload.php';  

##Debug
http://www.sitepoint.com/debugging-xdebug-sublime-text-3/  
