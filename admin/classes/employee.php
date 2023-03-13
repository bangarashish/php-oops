<?php 

 class EmployeeClass {

    private $servername = "localhost";
    private $username  = "root";
    private $password  = "";
    private $database  = "php_oops";

    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if(mysqli_connect_error()){
            trigger_error("Failed to Connect to MySQL:". mysqli_connect_error());
        }else{
            return $this->conn;
        }
    }

    public function insert_employee($post){
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert_query = "INSERT INTO employee (email, password) VALUES ('$email', '$password')";

        $sql = $this->conn->query($insert_query);
        if($sql == true){
            echo "Data Insert Successfully";
        }
    }

    public function view_employee(){

        $array = array();  
        $query = "SELECT * FROM employee";  
        $result = mysqli_query($this->conn, $query);  
        while($row = mysqli_fetch_assoc($result))  
        {  
            $array[] = $row;  
        }  
        // print_r($array);
        return $array;  
    }

    public function edit_employee($editID){
        
        $query = "SELECT * FROM employee WHERE id = '".$editID."'";
        $result = mysqli_query($this->conn, $query);
        while($row = mysqli_fetch_assoc($result))  
        {  
            $array[] = $row;  
        }  
        // print_r($array);
        return $array;  

    }

    public function delete_employee($deleteID){

        $delete_query = "DELETE FROM employee WHERE id = '".$deleteID."'";
        $result = mysqli_query($this->conn, $delete_query);
        if($result == true){
            echo "Delete data successfully";
        }
    }

   
}
?>