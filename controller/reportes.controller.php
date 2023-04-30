<?php //Modulo C
require("../models/reportes.model.php");

$idpersonal = $_POST['idpersonal'];
$idfunciones = $_POST['idfunciones'];
$cantidad = $_POST['cantidad'];

$reportes = new Reportes();
$reportes->Guardar($idpersonal, $idfunciones, $cantidad);
