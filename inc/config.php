<?php 	

class Sql {

	public $conn;

	public function __construct(){
		return $this->conn = mysqli_connect("localhost","root","","bd_paideia");
		// return $this->conn = mysqli_connect("localhost","admin","","bd_paideia");
	}

	public function query($string_query){
		return mysqli_query($this->conn,$string_query);
	}

	public function insert($string_query){
		$result = $this->query($string_query);
		return $result;
	}

	public function get_last_id(){
		$id_cliente = mysqli_insert_id($this->conn);
		return $id_cliente;
	}

	public function select($string_query){
		$result = $this->query($string_query);

		$data = array();
		while($row = mysqli_fetch_array($result)){
			foreach ($row as $key => $value) {
				$row[$key] = utf8_encode($value);
			}
			array_push($data,$row);
		}
		unset($result);
		return $data;
	}
	public function __destruct(){

		mysqli_close($this->conn);

	}

}
