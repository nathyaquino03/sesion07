<?php
date_default_timezone_set('America/Lima');
if(isset($_REQUEST['ap']) && isset($_REQUEST['am']) && isset($_REQUEST['nombre']) && isset($_REQUEST['sueldo'])){
    // Convertir cada valor a mayúsculas
    $apellido_paterno = strtoupper($_REQUEST['ap']);
    $apellido_materno = strtoupper($_REQUEST['am']);
    $nombre = strtoupper($_REQUEST['nombre']);
    $sueldo=$_REQUEST['sueldo'];

    echo "Hola, mi nombre completo es: $apellido_paterno $apellido_materno $nombre";
    echo "<br> S/. ".number_format($sueldo,2);
    echo " <br> Fecha actual: ". date('d-M-Y h:m a');
} else {
    echo "Por favor, asegúrate de enviar el apellido paterno, materno y el nombre.";
}
?>
