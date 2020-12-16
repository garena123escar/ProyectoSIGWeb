<?php

include('config.php');
   
   session_start();
   
   if(!isset($_POST['peticion']))
   {
	$_POST['peticion'] = "peticion";
   }

   if(!isset($_POST['parametros']))
   {
	$_POST['parametros'] = "parametros";
   }

   $peticion = $_POST['peticion'];
   $parametros = $_POST['parametros'];
   
   switch($peticion)
   {
       case 'perfil':
       {
           $user = $parametros['usuario']

           $sql = $databasePDO->query("select id_usuario,usuario, nombre, apellido, telefono, contrasena, correo from usuarios where usuario ='$user'");
           $query4= pg_query($dbcon,$sql);
				  $row = pg_fetch_row($query3);
				  echo $row[0];
			  break;
       }










   }

?>