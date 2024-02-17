<?php

    $destinatario = 'CreacionesAndrea78@gmail.com';
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $CorreoElectronico = $_POST['CorreoElectronico'];
    $TelefonoCelular = $_POST['TelefonoCelular'];
    $DescripciondelPedido = $_POST['DescripciondelPedido'];

    $header = "Enahorabuena, un cliente desea ponerse en contacto desde el Sitio Web Oficial: 'Creaciones Andrea ' \n";
    $mensajeCompleto =  $Nombre . $Apellidos;
    $Datosimportantes = "Numero Celular: " . $TelefonoCelular . "\n El Cliente dice: \n " .$DescripciondelPedido;

    mail( $destinatario, $mensajeCompleto, $Datosimportantes, $header);
    echo "<script>alert('Solicitud enviada con exito...')</script>";
    echo "<script> setTimeout(\"location.href='Index.html'\",1000)</script>";
?>

