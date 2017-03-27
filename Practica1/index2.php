<?php
include("bd.php");
$db = new MySQLDB();
$consulta = "Select * from usuarios";
$result = $db->consulta($consulta);

if($db->num_rows($result)>0)
{
    ?>
    <div>
        <table>
            <thead>
              <tr>
                  <th data-field="id">ID</th>
                  <th data-field="user">Usuario</th>
              </tr>
            </thead>
            
            <tbody>
                <?php
                    while($resultados = $db->fetch_array($result))
                    { ?>
                        <tr>
                            <td><?php echo $resultados{0}; ?></td>
                            <td><?php echo $resultados{1}; ?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
}
else
{
    echo "fallo";
}

?>

