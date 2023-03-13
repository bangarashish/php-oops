<?php  
    include('../../common/header.php');
    include('../../classes/employee.php');
   
    $emp_obj = new EmployeeClass();

   if(isset($_POST['submit'])){
    $emp_obj->insert_employee($_POST);
   }

?>
<html> 
    <head> 
        <title> Employee Form </title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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