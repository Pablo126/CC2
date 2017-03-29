ssh mcc15472800@hadoop.ugr.es
passwd CC.2017pw
Sacamos el contenedor de apache y php de la web
https://hub.docker.com/r/nimmis/alpine-apache-php5/
docker pull nimmis/alpine-apache-php5

ACCOUNT: ...800
5 ports: hadoop cluster port 14055-14059 to internal 14055-14059

docker run -d -p 14055:80 --name jpgcontainer nimmis/alpine-apache-php5

Si entramos en
http://hadoop.ugr.es:14055/
vemos que funciona

utilizamos el bash:
docker exec -i -t a3c813ec2f88  /bin/sh


nos podemos descargar los archivos de la web de nuestro repositorio de la siguiente manera

wget https://github.com/Pablo126/CC2/blob/master/Practica1/eliminar.php
 asi con cada uno de los archivos


docker 2

docker pull mysql/mysql-server

docker run --name jpg_mysql -e MYSQL_ROOT_PASSWORD=Pablo1234 -d mysql/mysql-server:latest

docker exec -i -t e449241bac59 mysql -uroot -p

docker run --name jpgcontainer --link jpg_mysql:mysql -d Practica2
