
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<?php
include("bd.php");
$db = new MySQLDB();
$consulta = "Select * from usuarios";
$result = $db->consulta($consulta);
if($db->num_rows($result)>0)
{
    ?>
    <div class="card" style="width: 20rem;">
      <div class="card-block">
        <h4 class="card-title">Nuevo usuario</h4>
            <form method="post" action="agregar.php">
                <label for="nombreusuario">Nombre usuario:</label>
                <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" placeholder="Usuario15">
            <button type="submit" class="btn btn-primary">Crear</button>
            </form>
      </div>
    </div>
    <br>
    <div>
        <table class="table table-striped">
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
                            <td><a href="eliminar.php?id=<?php echo $resultados{0};?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
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
