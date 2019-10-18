<?php

class dbManager {
 	var $servername = "127.0.0.1:3306";
	var $username = "root";
	var $password = "";
	var $dbname = "webshop_items";

	var $conn;
	
	function connect() {
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}
		
	function query() {
		$sql = "SELECT * from products";
		$result = $this->conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				 echo "id: " . $row["id"]. " - Name: " . $row["prod_title"]. " ";
				} 
		} else {
			echo "0 results";
		}
	}
	
	function disconnect() {
		$this->conn->close();
	}

}

$dbInstance = new dbManager();
$dbInstance->connect();
$dbInstance->query();
$dbInstance->disconnect();





?>