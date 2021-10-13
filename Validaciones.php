<?php

class Validaciones{

      private function __construct(){}

      
        static function init_error(){
            ini_set('display_errors', '1');
            ini_set('display_startup_errors','1');
            error_reporting(E_ALL);	
      }
      
      
      
      
      
       private static function esEmail($email){
            $v = '/^[\w.-]+@\w+(\.[a-z]{2,})+$/i'; 
            if(preg_match($v, $email)){
                  return false;
            }

            return true;
      }
      
      
      static function guardar($formulario){
            
                  foreach ($formulario as $key => $value) {

                        $_SESSION['datosUsuario'][$key]=$value;

            }
      }
      
     
    
     
      
      
      static function validarEmail($email){
      
            if (empty($email)) {
                  return false;
            }
      
            if (self::esEmail($email)) {
                  return false;
            }
      
            return true;
      }
      static function validarPassword($str){
            if (empty($str)){
                  echo '<p>Introduzca el espacio de Contraseña Requerido </p>';
                  return false;
            }
            if(strlen($str) < 8 ){
                  echo '<p>La contraseña es debil, tiene que tener un minimo de 8 caracteres</p>';
                  return false;
            }
            
            return true;
      }
      
      static function validarString($str, $texto){
            
            if (strlen($str)==0){
                  echo '<p>Introduzca un '.$texto.' </p>';
                  return false;
            }
            if(strlen($str) < 3 ){
                  echo '<p>Introduzca un ' .$texto. ' Más largo</p>';
                  return false;
            }
            
          
            if(self::stringTieneNumeros($str)){
                  echo '<p>Introduzca un ' .$texto. ' Válido</p>';
                  return false;
            }
            
            return true;
      }
      static function tieneEspaciosEnBlanco($cadena){
           for ($i=0; $i < strlen($cadena); $i++) { 
                  if($cadena[$i] == ' '){
                        return true;
                  }
             }
            return false;
      }
      
      static function esEdad($edad){
            echo $edad;
            if($edad <= 0 || $edad > 100){
                  return false;
            }
            if(!is_numeric($edad)){
                  return false;
            }
            return true;
      }
      
     private static function stringTieneNumeros($str){
             for ($i=0; $i < strlen($str); $i++) { 
                  if(!preg_match('#[^0-9]#',$str[$i])){
                        return true;
                  }
                  
             }
            
            return false;
      }
      
}

