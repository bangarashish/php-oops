<?php 
    include('../../common/header.php');
    include('../../classes/employee.php');

    $view_obj = new EmployeeClass();
    $data = $view_obj->view_employee();

    if(isset($_GET['deleteID']) && !empty($_GET['deleteID'])){
        $deleteID = $_GET['deleteID'];
        $view_obj->delete_employee($deleteID);
    }
?>
<html> 
    <head> 
        <title> </title>
       
    </head>
    <body> 
        <div class="container"> 
            <div class="row"> 
                <div class="col"> 
                <?php 
                    echo "<pre>";
                    //print_r($data);
                    foreach($data as $row){
                        //print_r($row);
                ?>
                    <table class="table"> 
                        <thead> 
                            <tr> 
                                <th> ID </th>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr> 
                                <td> <?php echo $row['id'];?></td>
                                <td> <?php echo $row['email'];?></td>
                                <td> <?php echo $row['password'];?></td>
                                <td> 
                                    <a href="update.php?editID=<?php echo $row['id']; ?>"> Edit </a>
                                </td>
                                <td> 
                                    <a href="index.php?deleteID=<?php echo $row['id']; ?>"> Delete </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </body>
</html> 