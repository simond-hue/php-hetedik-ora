<?php

class dbManager {
 	var $servername = "localhost:3307";
	var $username = "root";
	var $password = "";
	var $dbname = "webshop";

	var $conn;
	
	public function connect() {
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}
		
	public function select($sql) {
		$result = $this->conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if(isset($_POST["delete"])){
					$this->delete("DELETE FROM products WHERE id=".$_POST["delete"]);
				}
				echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"] . "</td><td>";
				?>
				<form method="POST">
				<input type="hidden" name="delete" value=<?php echo $row["id"]; ?>>
				<input type="submit" value="DELETE">
				</form>
				<?php
				echo "<td></tr>";
			}
		} else {
			echo "0 results";
		}
	}

	public function delete($sql){
		$result = $this->conn->query($sql);
	}
	
	public function disconnect() {
		$this->conn->close();
	}

}

?>