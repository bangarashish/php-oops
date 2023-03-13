<?php 
    include('../../common/header.php');
    include('../../classes/employee.php');

    $emp_obj = new EmployeeClass();

    if(isset($_GET['editID']) && !empty($_GET['editID'])){
        $editID = $_GET['editID'];
        $dataById = $emp_obj->edit_employee($editID);
    }
   
   
?>
<html> 
    <head> 
        <title> Employee Form </title>
        <!-- Latest compiled and minified CSS -->
    </head>
    <body> 
    <div class="container"> 
            <div class="row"> 
                <div class="col"> 
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" >
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>