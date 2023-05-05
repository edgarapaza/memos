<?php
require_once "Conexion.php";

class Validar
{
		private $conn;

		function __construct()
		{
			$this->conn = new Conexion();
        	return $this->conn;
		}

		function Verificar($usuario, $passwd)
		{
			$sql = "SELECT idpersonal, nivel, activo FROM asistencia_login WHERE loginname = '$usuario' AND passwd = '$passwd';";
			$data = $this->conn->ConsultaArray($sql);
			return $data;
		}
}
