sudo apt install apache2
Primero se instala apache2
Tener en cuenta que por defecto se usa puerto 80 y ver que los firewalls no lo bloqueen
## Ver el satado de apache
sudo systemctl status apache2
en navegador poner localhost y aparece la pagina de apache
## para que al reiniciar la maquina se ejecute el servidor
sudo systemctl enable apache2
## Instalar la base de datos
sudo apt install mariadb-server
sudo systemctl status mariadb.service 
## Comando para seguridad
sudo mysql_secure_installation 
## Instalar php
sudo apt install php libapache2-mod-php php-mysql
php -v
## config de apache esta en /etc/apache2
 
 # OTRO TUTORIAL
sudo apt install mariadb-server mariadb-client apache2 php libapache2-mod-php php-mysql php-curl php-json php-pear php-gd php-apcu
