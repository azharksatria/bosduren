<?php

class Koneksi 
{
	var $host     ="localhost";
	var $username ="root";
	var $password ="password";
	var $db       ="ardi_durian";

	public function  database()
	{
		$mysql=new mysqli($this->host,$this->username,$this->password,$this->db);
		return $mysql;
	}
}