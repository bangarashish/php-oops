<?php 
    include('../../common/header.php');
    include('../../classes/employee.php');

    $view_obj = new EmployeeClass();
    echo "<pre>";
    print_r($view_obj->view_employee());
   
?>
<html> 
    <head> 
        <title> </title>
    </head>
    <body> 
        <div class="container"> 
            <div class="row"> 
                <div class="col"> 
                    
                </div>
            </div>
        </div>
    </body>
</html> 