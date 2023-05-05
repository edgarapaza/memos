<?php
session_start();
require_once "../models/validar.model.php";

$validar = new Validar();

$user = $_REQUEST['txtusuario'];
$pass = $_REQUEST['txtpassword'];

$data = $validar->Verificar($user, $pass);

if(!is_null($data))
{
	echo "lleno";
	if($data['activo'] == 1)
	{
		if($data['nivel'] == 1)
		{
			$_SESSION['personal'] = $data['idpersonal'];
			header("Location: ../views/index.php");
		}else{
			//echo "NO activo";
			header("Location: ../index.html");
		}
	}else{
		echo "No activo";
		header("Location: ../index.html");
	}
}else{
	echo "vacio";
	header("Location: ../index.html");
}
?>