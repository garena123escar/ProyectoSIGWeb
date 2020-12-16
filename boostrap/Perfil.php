

<?php
    session_start();
    include_once "config.php";
   	$sql = $databasePDO->query("select id_usuario,usuario, nombre, apellido, telefono, contrasena, correo from usuarios where usuario = 'Georeportero'");
	$resultados = $sql->fetchAll(PDO::FETCH_OBJ);
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
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Recuperar-contrasea-1.css">
    <link rel="stylesheet" href="assets/css/Recuperar-contrasea.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Single-Page-Contact-Us-Form.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- Start: Profile Edit Form -->
    <nav class="navbar navbar-light navbar-expand-md" style="box-shadow: 2 0px;border-style: none;border-bottom-style: solid;">
        <div class="container-fluid"><a class="navbar-brand" >Datos de Usuario</a><a class="navbar-brand" href="MapaRep.php?logueado=si" style="height: 39px;color: rgba(255,0,0,0.9);filter: brightness(200%);">Volver</a></div>
    </nav>
    <div class="container profile profile-view" id="profile">
        <form>
            <div class="form-row profile-row">

                <div class="col-md-8">
                    <h1> </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Usuario</label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr id="usario"></tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($resultados as $edificio){ ?>
                                            <tr>
                                            <td><?php echo $edificio->usuario?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group"><label>Nombre</label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($resultados as $edificio){ ?>
                                            <tr>
                                                <td><?php echo $edificio->nombre?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Apellido</label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($resultados as $edificio){ ?>
                                            <tr>
                                                <td><?php echo $edificio->apellido ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group"><label>Teléfono</label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($resultados as $edificio){ ?>
                                            <tr>
                                                <td><?php echo $edificio->telefono ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label>Correo</label>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                <?php foreach($resultados as $edificio){ ?>
                                            <tr>
                                                <td><?php echo $edificio->correo ?></td>
                                            </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </form>
    </div>
    <!-- End: Profile Edit Form -->
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Paralax-Hero-Banner.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>