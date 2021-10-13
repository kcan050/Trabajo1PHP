<?php

    require('Validaciones.php');
    Validaciones::init_error();
       session_start();
 
?>

<!DOCTYPE html >
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    
    <body>
         <form  action ="" method="post">
           
           <h3>Elija su equipo de futbol favorito (pueden ser varios):</h3>
             
             <input type="checkbox" id="equipo1" value="River Plate" name="equipo[]"/>
             <label for="equipo1"> River Plate</label><br>
             <hr>
             <input type="checkbox" id="equipo2" value="Barcelona" name="equipo[]"/>
             <label for="equipo2"> Barcelona</label><br>
             <hr>
             <input type="checkbox" id="equipo3" value="Manchester United" name="equipo[]"/>
             <label for="equipo3"> Manchester United</label><br>
             <hr>
             <input type="checkbox" id="equipo4" value="Juventus" name="equipo[]"/>
             <label for="equipo4"> Juventus</label><br>
             <hr>
            
             
              <button type="submit" class="btn btn-primary" name="enviar" >Enviar </button>
                                          
                                          
                                          
                                   
                                          
                                    
             
            
             
         </form>
       
    </body>
   
</html>

<?php
      if(isset($_POST['enviar'])){
          
            if(!empty($_POST['equipo'])) {
                Validaciones::guardar($_POST);
                header("Location:pagMostrarDatos.php");
                
    
            }
            else{
                  echo "<b>Minimo tiene que seleccionar un equipo</b>";
            }
      }
?>