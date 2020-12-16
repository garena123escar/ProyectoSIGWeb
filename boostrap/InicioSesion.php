<?php

session_start();
  
if($_GET['op']=='salir')
{
  if(isset($_SESSION["rol"])){ session_unset(); session_destroy(); }
}else
{
    if(isset($_SESSION["rol"])){header('Location: InicioSesion.php?logueado=si'); 
    exit();}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Aplicacion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner.css">
    <link rel="stylesheet" href="assets/css/Paralax-Hero-Banner-1.css">
    <link rel="stylesheet" href="assets/css/Recuperar-contrasea-1.css">
    <link rel="stylesheet" href="assets/css/Recuperar-contrasea.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Single-Page-Contact-Us-Form.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="lib/jquery/jquery-3.4.1.js"></script>
        <script type="text/javascript">
	
	
	$( document ).ready(function() 
	{

        
		$("#boton1").click(function()
		{
			$.post("src/funciones.php",
			{
				peticion: 'validar-login',
				parametros: {  login: $("#caja_usuario").val() ,  password: $("#caja_password").val()  },
			},
			function(data, status){
				console.log("Datos recibidos: " + data + "\nStatus: " + status);
				if(status=='success')
				{
					if(data=='ENTRAR')
					{
						//Ingresa al archivo semana15.php
                        document.location.href ='MapaRep.php?logueado=si';	
					}else
					{
						$("#caja_respuesta").html( '<br><b>USUARIO O PASSWORD ERROR !!</b>' );
					}
				}
			});
		});
		
		
    });


	
	</script>
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md" style="box-shadow: 2 0px;border-style: none;border-bottom-style: solid;">
        <div class="container-fluid"><a class="navbar-brand" href="index.php">CityReporte</a></div>
    </nav>    
    <!-- Start: Login Form Clean -->
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/logocityreporte.jpeg"></div>
            <div class="form-group"><input class="form-control" type="email" name="Correo" placeholder="Correo" id="caja_usuario"></div>
            <div class="form-group"><input class="form-control" type="password" name="Contraseña" placeholder="Contraseña" id="caja_password" ></div>
            <div class="form-group"><a id="boton1" class="btn btn-primary btn-block" role="button">Iniciar Sesión</a></div><a class="forgot" href="Olvcontra.html">Olvidaste tu Contraseña?</a><a class="text-capitalize text-info forgot" href="Registro.html"><span style="text-decoration: underline;">Eres nuevo? Registrate aquí</span><br></a></form>
        <div></div>
    </div>
    <!-- End: Login Form Clean -->
    <div class="container text-center">
        <div></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Paralax-Hero-Banner.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>