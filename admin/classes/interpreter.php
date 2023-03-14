<?php 

 class InterpreterClass {

    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "php_oops";

    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if(mysqli_connect_error()){
            trigger_error("Failed to connect to mysql: ". mysqli_connect_error());
        }else{
            return $this->conn;
        }
    }

    public function insert_interpreter($name, $email, $username, $password){

        $insert = "INSERT INTO interpreter (name, email, username, dob) VALUES ('$name', '$email', '$username','$dob')";
        $query = $this->conn->query($insert);
        if ($query) {
            return true;
        }else{
            return false;
        }
    }
 }
?>