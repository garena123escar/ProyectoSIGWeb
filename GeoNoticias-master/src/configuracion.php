<?php
 #Archivo de configuracion de la base de datos
 
        define("PG_DB"  , "postgres");
	define("PG_HOST", "pruebasigweb.c7iy0vpehagx.us-east-2.rds.amazonaws.com");
	define("PG_USER", "pruebasigweb");
	define("PG_PSWD", "pruebasigweb");
	define("PG_PORT", "5432");
	
	$dbcon = pg_connect("dbname=".PG_DB." host=".PG_HOST." user=".PG_USER ." password=".PG_PSWD." port=".PG_PORT."");


?>
