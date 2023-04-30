<?php
require "Conexion.php";
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
		$sql="SELECT idpip, descripcion FROM indice_pip;";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}

}
