<?php include('../../common/header.php'); ?>
<html> 
    <head> 
        <title> Interpreter </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body> 
        <div class="container"> 
            <div class="row"> 
                <div class="col"> 
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Interpreter</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Interpreter</h4>
                            </div>
                            <div class="modal-body">
                                <form id="interpreterForm"> 
                                    <div class="form-group"> 
                                        <label> Name </label>
                                        <input type="text" id="input_name" class="form-control" placeholder="name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label> Email </label>
                                        <input type="email" id="input_email" class="form-control" placeholder="email" required="">
                                    </div>
                                    <div class="form-group"> 
                                        <label> Username </label>
                                        <input type="text" id="input_username" class="form-control" placeholder="username" required="">
                                    </div>
                                    <div class="from-group"> 
                                        <label> Dob </label>
                                        <input type="date" id="input_date" class="form-control" placeholder="dob" required="">
                                    </div>
                                </form>
                                </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-success" id="submit-data"> ADD </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function(e){
               if($("#interpreterForm")[0].checkValidity()){
                e.preventDefault();
                $.ajax({
                    url: "interpreterAction.php",
                    type: "POST",
                    data: 
                });
               }
            });
        </script>
    </body>
</html>