<?php
session_start();

require "../models/ValidarUsuario.php";
$tipo = "Entrada";

$validar = new ValidarUsuario();
$fecha1 = date("Y-m-d");
//echo $_SESSION['personal'].'<br>';

$horaEntrada = $validar->Verificar($_SESSION['personal'],$fecha1,$tipo);

//echo $horaEntrada['hora'].'<br>';
//echo gettype($horaEntrada['hora']).'<br>';

$inicio = strtotime($horaEntrada['hora']);
//echo $horaEntrada['hora'].'<br>';
if(isset($_SESSION['inicio'])) {
    @$idpersonal = $_SESSION['personal'];
    @$fecha = date('Y-m-d');
    //echo $fecha.'<br>';

    $horasalida = date('H:i:s');
    $tipoS = "Salida";
    //echo $horasalida.'<br>';

    $fin = time();
    $tiempo_uso = $fin - $inicio;

    $tiempoUso = round($tiempo_uso/3600,2);
    //echo "Tiempo de uso: $tiempoUso horas".'<br>';
    $validar->RegistrarSalida($idpersonal,$fecha,$horaEntrada['hora'],$tipoS,$horasalida,$tiempoUso);
    //if ($validar){  
        //echo "Registro guardado".'<br>';
    //}

    unset($_SESSION['personal']);
    unset($_SESSION['inicio']);
    unset($_SESSION['idbitacora']);

    header("Location: ../index.html");
}


?>