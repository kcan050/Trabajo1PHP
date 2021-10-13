<?php

    require('Validaciones.php');
    Validaciones::init_error();
       session_start();
    
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
            
      </head>
      <body>
            <form action="" method="post">
                  <h1>Informacion necesaria:</h1>
                  
                 <br> <label for="nombrePag2">Nombre: </label>
                  <input type="text" id="nombrePag2" name="nombrePag2" />
                  <hr>
                 <br> <label for="apellidos">Apellidos: </label>
                  <input type="text" id="apellidos" name="apellidos" />
                  <hr>
                <br>  <label for="edad">Edad(entre 0 y 100): </label>
                  <input type="number" name="edad" />
                  <hr>
                  <input type="submit" value="Submit" name="submitPag2" />
            </form>
      </body>
</html>

<?php

      if(isset($_POST['submitPag2'])){
            
            if(!Validaciones::validarString($_POST['nombrePag2'], 'nombre')){
                  return;
            }
             
            if(!Validaciones::validarString($_POST['apellidos'], 'apellidos')){
                  return;
            }
            if(!Validaciones::esEdad($_POST['edad'])){
                  echo '<p>Introduzca una edad Válida</p>';
                  return;
            }
           
            Validaciones::guardar($_POST);
            header("Location:pagina3.php");
          
        
      }

?>