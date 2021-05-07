<?php
	require_once((ROOT_PATH)."/Models/homeModel.php");
	require_once((ROOT_PATH)."/Libraries/Core/Conexion.php");
	require_once((ROOT_PATH)."/Libraries/Core/Mysql.php");
	class Mysql extends Conexion
	{
		private $conexion; //El problema es aquí
		private $strquery;
		private $arrValues;

		function __construct()
		{
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conect();
		}
		//Inserta Un Registro
		public function insert(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrValues = $arrValues;
			$insert = $this->conexion->prepare($this->strquery);
			$resInsert = $insert->execute($this->arrValues);
			if ($resInsert) {
				$lastInsert = $this->conexion->lastInsertId();
			}else {
				$lastInsert = 0;
			}
			return $lastInsert;
		}
		//Busca Un Registro
		public function select(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute();
			$data = $result->fetch(PDO::FETCH_ASSOC);
			return $data;
		}
		//Devuelve Todos Los RegistroS
		public function select_all(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute();
			$data = $result->fetchall(PDO::FETCH_ASSOC);
			return $data;
		}
		//Actualiza Registro
		public function update(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrValues = $arrValues;
			$update = $this->conexion->prepare($this->strquery);
			$resExecute = $update->execute($this->arrValues);
			return $resExecute;
		}
		//Borra Los Registro
		public function delete(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$del = $result->execute();
			return $del;
		}
	}

?>