<?php
require "../models/listas.model.php";
$listas = new Listas();

$datap = $person = $listas->ListaPersonal();

$micombo = "<select name='idpersonal' id='idpersonal'>
                <option value=''>Seleccionar</option>";

while($fila = $datap->fetch_array())
{
	$micombo .= "<option value=".$fila['idpersonal'].">".$fila['nombre']."-(".$fila['cargo'].") </option>";
}
$micombo .= " </select>";
echo $micombo;
?>