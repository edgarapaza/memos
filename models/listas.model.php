<?php
require_once "Conexion.php";

class Listas
{
	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;
	}

	function ListaProyectos()
	{
		$sql="SELECT idproyecto, nomproyecto, nomcorto, cui, distrito FROM gonsad_proyecto;";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}

	function ListaPerfil()
	{
		$sql="SELECT p.idpip, p.descripcion, v.idpersonal, v.nombre, v.cargo FROM indice_pip AS p, view_personal AS v;";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}

	function ListaPersonal()
	{
		$sql="SELECT idpersonal, nombre, cargo FROM view_personal;";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}

}
