<?php

      require('Validaciones.php');
      Validaciones::init_error();

?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta
                  name="viewport"
                  content="width=device-width, initial-scale=1.0"
            />
            <title>Crear cuenta</title>
      </head>
      <body>
            <form method="post" action="">
                  <h1>BIENVENIDO, ES HORA DE CREAR SU CUENTA:</h1>
                <br>  <label for="nombre">Usuario: </label> 
                  <input type="text" id="nombre" name="nombre" required />
                  <hr>
                 <br>  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required />
                  <hr>
                 <br> <label for="password">Contraseña: </label>
                  <input type="password" id="password" name="password" required />
                  <hr>
                 <br> <label for="password2">Repita el password: </label>
                  <input type="password" id="password2" name="password2" required />
                  <hr>
                  <input type="submit" value="Submit" name="submit" />
            </form>
      </body>
</html>


<?php

      if(isset($_POST['submit'])){
            
            if(!Validaciones::validarString($_POST['nombre'], 'nombre de Usuario')){
                  return;
            }
            if(Validaciones::tieneEspaciosEnBlanco($_POST['nombre'])){
                   echo '<p>El nombre de usuario no puede contener espacios en blanco</p>';
                  return;
            }
             
            if (!Validaciones::validarEmail($_POST['email'])) {
                  echo '<p>El email no es valido</p>';
                  return;
            }
            
            if(!Validaciones::validarPassword($_POST['password'])){
                  return;     
                  
            }
            if(strcmp($_POST['password'], $_POST['password2'])){
                  echo '<p>Las contraseñas no coinciden</p>';
                  return;
            }
             
           
            session_start();
            Validaciones::guardar($_POST);
           
           header("Location:pagina2.php");
           
        
      }

?>