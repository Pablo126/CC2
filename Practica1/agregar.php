<?php
if(isset($_POST['nombreusuario']))
{
    include("bd.php");
    $db = new MySQLDB();
    $usuario = $_POST['nombreusuario'];
    $consulta = "insert into usuarios (id,name) values (null,'".$usuario."')";
    $result = $db->consulta($consulta);
    if ($result = true)
    {
    header('Location: index.php');
    }
    else
    {
        echo "Error agregando usuario";
    }
}

?>
