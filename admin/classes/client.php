<?php
	
	class Database 
	{
	private $servername = "localhost";
    private $username  = "root";
    private $password  = "";
    private $database  = "php_oops";

    public $con;

    public function __construct() {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if(mysqli_connect_error()){
            trigger_error("Failed to Connect to MySQL:". mysqli_connect_error());
        }else{
            return $this->con;
        }
    }

		// Insert customer data into customer table
		public function insertRecond($name, $email, $username, $dob)
		{
			//$sql = "INSERT INTO $this->clients (name, email, username, dob) VALUES('$name','$email','$username','$dob')";
			$sql = "INSERT INTO client (name, email, username, dob) VALUES('$name','$email','$username','$dob')";
			$query = $this->con->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}
		// Fetch customer records for show listing
		public function displayRecord()
		{
			$sql = "SELECT * FROM client";
			$query = $this->con->query($sql);
			$data = array();
			if ($query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}else{
				return false;
			}
		}
		// Fetch single data for edit from customer table
		public function getRecordById($id)
		{
			$query = "SELECT * FROM client WHERE id = '$id'";
			$result = $this->con->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				return false;
			}
		}
		public function totalRowCount(){
			$sql = "SELECT * FROM client";
			$query = $this->con->query($sql);
			$rowCount = $query->num_rows;
			return $rowCount;
		}
	}
?>