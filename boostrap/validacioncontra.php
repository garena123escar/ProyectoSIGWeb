<?php

if (validar_clave($contrasena,$error_clave)){
   if(strlen($contrasena) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($contrasena) > 16){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$contrasena)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$contrasena)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$contrasena)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
}

?>