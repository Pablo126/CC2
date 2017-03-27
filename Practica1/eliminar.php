<?php
if(isset($_GET['id']))
{
    include("bd.php");
    $db = new MySQLDB();
    $id_usuario = $_GET['id'];
    $consulta = "delete from usuarios where id=".$id_usuario;
    $result = $db->consulta($consulta);
    if ($result = true)
    {
    header('Location: index5.php');
    }
    else
    {
        echo "Error eliminando usuario";
    }
}

?>
