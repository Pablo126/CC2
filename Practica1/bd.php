<?php
    class MySQL
    {
        private $servername; 
        private $username = 'pablo';
        private $password = "Pablo@1234";
        private $database = "practica1cc";
        private $dbport = 80;
        private $conexion; private $total_consultas;
        public function MySQL()
        { 
            if(!isset($this->conexion))
            {
              $this->conexion = ('192.168.10.83',$username,$password))
                or die(mysql_error());
              mysql_select_db("practica1cc",$this->conexion) or die(mysql_error());
            }
        }
        public function consulta($consulta)
        { 
            $this->total_consultas++; 
            $resultado = mysql_query($consulta,$this->conexion);
            if(!$resultado){ 
              echo 'MySQL Error: ' . mysql_error();
              exit;
            }
        return $resultado;
        }
        public function fetch_array($consulta)
        {
        return mysql_fetch_array($consulta);
        }
        public function num_rows($consulta)
        {
        return mysql_num_rows($consulta);
        }
        public function getTotalConsultas()
        {
        return $this->total_consultas; 
        }
        
        
        public function consultaArray($sql)
        {
            $rows = [];
            $consulta = $this->consulta($sql);
            if($this->num_rows($consulta)>0){
                while($resultados = $this->fetch_array($consulta))
                { 
                    $rows[] = $resultados{0};  
                }
            }
        return $rows;
        }
    }
    
    ?>
