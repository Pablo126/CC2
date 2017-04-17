ssh mcc15472800@hadoop.ugr.es
passwd CC.2017pw
Sacamos el contenedor de apache y php de la web
https://hub.docker.com/r/nimmis/alpine-apache-php5/
docker pull nimmis/alpine-apache-php5

ACCOUNT: ...800
5 ports: hadoop cluster port 14055-14059 to internal 14055-14059

docker run -d -p 14055:80 --name jpgcontainer nimmis/alpine-apache-php5

Si entramos endocker
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


docker run -d -p 14055:3306 --name jpgdb -e MYSQL_ROOT_PASSWORD=PWD mysql/mysql-server


docker run -d -p 14057:80 --name jpgapp3 --link jpgdb:jpgdb nimmis/apache-php5

CONTAINER ID        IMAGE                               COMMAND                CREATED             STATUS              PORTS                                                      NAMES
1b8b17d885dc        nimmis/apache-php5                  "/my_init"             47 seconds ago      Up 45 seconds       0.0.0.0:14056->80/tcp                                      jpgapp                            
efdfa3fa9f57        mysql/mysql-server                  "/entrypoint.sh mysq   2 minutes ago       Up 2 minutes        33060/tcp, 0.0.0.0:14055->3306/tcp                         jpgdb  

2e19e38db013        nimmis/apache-php5                  "/my_init"             11 minutes ago      Up 11 minutes       0.0.0.0:14057->80/tcp                                      jpgapp3                    



apt-get update -y && apt-get install git -y

nos bajamos todo y lo colocamos donde debamos... tambien modificamos el fichero de bd
conectamos al de mysql
conectamos con mysqlmysql -u root -p
con contraseña PWD

y ejecutamos los comandos


CREATE USER 'pablo'@'%' IDENTIFIED BY 'asd1234'
 GRANT ALL PRIVILEGES ON *.* TO 'pablo'@'%' WITH GRANT OPTION;



 archivo de bd

 class MySQLDB
{
        private $connection;          // The MySQL database connection

        /* Class constructor */
        function MySQLDB(){
                /* Make connection to database */
                $this->connection = mysql_connect('jpgdb', 'pablo', 'asd1234') o
r die(mysql_error());
                mysql_select_db('practica1cc', $this->connection) or die(mysql_e
rror());
        }
        function consulta($consulta)
        {
                $resultado = mysql_query($consulta,$this->connection);
                if(!resultado)
                {
                        echo "MySQL Error: ".mysql_error();
                        exit;
                }
                return $resultado;
