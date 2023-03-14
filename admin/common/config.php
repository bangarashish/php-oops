<?php 
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "php_oops";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection Failed:". $conn->connect_error);
    }
   
?>

        <?php 
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "unspoken";

        // // Create connection
        // $conn = mysqli_connect($servername, $username, $password, $dbname);
        // // Check connection
        // if (mysqli_connect_errno())
        // {
        // echo "Failed to connect to MySQL: " . mysqli_connect_error();
        // }

        // $base_url = "http://localhost/amanda/admin/";

        // if (!defined('base_url')){
        // define("base_url", "http://localhost/amanda/admin/");
        // }

        // if (!function_exists('base_url')) {
        // function base_url($url){
        //     return base_url.$url;
        // }
        // } 
        ?>