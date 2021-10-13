<?php 

    require('Validaciones.php');
    Validaciones::init_error();
    session_start();

     

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
</head>
<body>
      <h2>Usuario: <?php echo $_SESSION['datosUsuario']['nombre']; ?></h2>
      <hr>
      <p><b>Nombre:  </b>  <?php echo $_SESSION['datosUsuario']['nombrePag2'];?> </p>
      <hr>
      <p><b>Apellidos: </b>  <?php echo $_SESSION['datosUsuario']['apellidos'];?> </p>
      <hr>
      <p><b>Email: </b>  <?php echo $_SESSION['datosUsuario']['email'];?> </p>
      <hr>
      <p><b>Edad: </b>  <?php echo $_SESSION['datosUsuario']['edad'];?> </p>
      <hr>
      <p><b>Contraseña: </b>  <?php echo $_SESSION['datosUsuario']['password'];?> </p>
      <hr>
      <p><b>Equipos de futbol seleccioados: </b> </p>
      <ul>
          <?php 
            foreach($_SESSION['datosUsuario']['equipo'] as $select) {
                echo "<li>". $select ."</li>";
            }
          ?>
      </ul>
      <hr>
</body>
</html>