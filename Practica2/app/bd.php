<?php

class MySQLDB
{
   	private $connection;          // The MySQL database connection

   	/* Class constructor */
   	function MySQLDB(){
      		/* Make connection to database */
      		$this->connection = mysql_connect('jpgdb', 'pablo', 'asd1234') or die(mysql_error());
		mysql_select_db('practica1cc', $this->connection) or die(mysql_error());
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
	}
	function fetch_array($consulta)
	{
		return mysql_fetch_array($consulta);
	}
	function num_rows($consulta)
	{
		return mysql_num_rows($consulta);
	}
}
?>
