<?php
session_start();

require "../models/ValidarUsuario.php";

$validar = new ValidarUsuario();

if(isset($_SESSION['inicio'])) {

    $idbitacora = $_SESSION['idbitacora'];
    $horasalida = date('H:i:s');

    $fin = time();
    $inicio = $_SESSION['inicio'];
    $tiempo_uso = $fin - $inicio;
    echo "Tiempo de uso: $tiempo_uso segundos.";

    $validar->AddSalida($horasalida, $tiempo_uso, $idbitacora);

    echo "Registro guardado";

    unset($_SESSION['personal']);
    unset($_SESSION['inicio']);
    unset($_SESSION['idbitacora']);

    header("Location: ../index.html");
}


?>