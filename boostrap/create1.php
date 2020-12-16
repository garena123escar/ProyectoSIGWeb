<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["usuario"]) || !isset($_POST["nombre"])|| !isset($_POST["apellido"])) {
    exit();
}
#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";

$usuario = $_POST["usuario"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$contrasena=$_POST["contrasena"];
$correo=$_POST["correo"];


$sql = $databasePDO->prepare("INSERT INTO usuarios(usuario,nombre,apellido,telefono, contrasena,correo,id_rol) VALUES (?, ?, ?, ?,md5(?),?,2);");
$resultado = $sql->execute([$usuario, $nombre,$apellido, $telefono, $contrasena, $correo]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar
if ($resultado === true) {
    # Redireccionar a la lista
    echo "<script>
    alert('Usuario Creado Exitosamente!!!');
    window.location= 'InicioSesion.php?logueado=si'
</script>";
} else {
    echo "<script>
    alert('Compruebe los datos proporcionados');
    window.location= 'Registro.html'
</script>";
}
