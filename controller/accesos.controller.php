<?php
session_start();

require "../models/ValidarUsuario.php";

$validar = new ValidarUsuario();

# POST, GET
$user = $_POST['txtusuario'];
$pass = $_POST['txtpassword'];

$datos = $validar->Validar($user, $pass);
## id_personal, niv_usu, chk_usu

# Consulta a la base de datos
$idpersonal = $datos['id_personal'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");
$tipo = "Entrada";


if($datos['chk_usu']== 1)
{
    #echo "Activado";
    switch($datos['niv_usu'])
    {
        case 1:
            $_SESSION['admin'] = $idpersonal;
            $_SESSION['inicio'] = time();
            #echo "Administrador";

            $cantidaIngresos = $validar->VerificarAsistencia($idpersonal, $fecha);

            if($cantidaIngresos['total'] == 0)
            {
                $validar->RegistrarAsistencia($idpersonal, $fecha, $hora, $tipo);
                $validar->RegistrarBitacora($idpersonal, $fecha, $hora, $tipo);
                $_SESSION['idbitacora'] = $dato['idbitacora'];
                #echo "Iniciando el CONTADOR";
            }else{
                $validar->RegistrarBitacora($idpersonal, $fecha, $hora, $tipo);
                $_SESSION['idbitacora'] = $dato['idbitacora'];

            }

            header("Location: ../views/dashboard.php");
            break;

        case 2:
            $_SESSION['jefe'] = $idpersonal;
            $_SESSION['inicio'] = time();
            #echo "Jefe";

            $cantidaIngresos = $validar->VerificarAsistencia($idpersonal, $fecha);

            if($cantidaIngresos['total'] == 0)
            {
                $validar->RegistrarAsistencia($idpersonal, $fecha, $hora, $tipo);
                $validar->RegistrarBitacora($idpersonal, $fecha, $hora, $tipo);
                $_SESSION['idbitacora'] = $dato['idbitacora'];
                #echo "Iniciando el CONTADOR";
            }else{
                $validar->RegistrarBitacora($idpersonal, $fecha, $hora, $tipo);
                $_SESSION['idbitacora'] = $dato['idbitacora'];

            }

            
            header("Location: ../views/dashboard.php");
            break;

        case 3:
            $_SESSION['personal'] = $idpersonal;
            $_SESSION['inicio'] = time();
            #echo "Personal";
            
            $cantidaIngresos = $validar->VerificarAsistencia($idpersonal, $fecha);

            if($cantidaIngresos['total'] == 0)
            {
                $validar->RegistrarAsistencia($idpersonal, $fecha, $hora, $tipo);
                $dato = $validar->RegistrarBitacora($idpersonal, $fecha, $hora, $tipo);
                $_SESSION['idbitacora'] = $dato['idbitacora'];
                #echo "Iniciando el CONTADOR";
            }else{
                $dato = $validar->RegistrarBitacora($idpersonal, $fecha, $hora, $tipo);
                $_SESSION['idbitacora'] = $dato['idbitacora'];

            }

            header("Location: ../views/index.php");

            break;
        
        default:
            echo "Nivel Desconocido";
            //header("Location: ../index.html");
    }
}else{
    //echo "No activo";
    header("Location: ../index.html?msg=No Activo");
}


/*

#$ip="curl(https://www.cual-es-mi-ip.net/)";
#$pcomovil = "";

# Metodo VerificarAsistencia
# Metodo RegistrarAsistencia
# Metodo RegistraBitacora
# Metodo IniciaContador

*/