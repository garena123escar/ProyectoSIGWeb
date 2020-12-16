<?php
 
if($_POST) {
    $visitor_name = "nombre";
    $visitor_email = "correo";
    $asunto = "asunto";
    $tel = "tel";
    $visitor_message = "mensaje";
    $recipient="d.escobar.c@outlook.com" 
    if(isset($_POST['nombre'])) {
      $visitor_name = $_POST['nombre'];
    }
     
    if(isset($_POST['correo'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['correo']);
    }
     
    if(isset($_POST['tel'])) {
        $asunto = filter_var($_POST['tel']);
    }
     
    if(isset($_POST['asunto'])) {
        $tel = $_POST['asunto'];
    }
     
    if(isset($_POST['mensaje'])) {
        $visitor_message = $_POST['mensaje'];
    }
     
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $asunto, $visitor_message, $headers)) {
        echo "<p> href=mailto:d.escobar.c@outlook.com?subject=$asunto&amp;body=Administradores%20de%20CityReporte.%20%20%20Yo%20$visitor_name%20con%20numero%20$visitor_message</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>