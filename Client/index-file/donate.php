<?php 
    require('common.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blood donation</title>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="aos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        <?php 
    require('header.php');
    ?>
        <center>
                <h4 style="margin-top:4%;color: white; background-color: rgb(128,0,0); font-weight: bold">Online donation request</h4>
            </center>
        <div id="donatenow">
        <div class="container">
                <div class="row">
                    <div class="block1">
                    <div class="col-sm-9 col-sm-offset-2">
                        <div class="panel panel-default panel-margin" >
                            <div class="panel-heading">
                                <h4 style="color: rgb(128,0,0); ">Donor Details</h4>
                            </div>
                            <div class="panel-body">
               
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                    <div class="form-group">
                                        <label for="Name">Name</label> 
                                        <input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
                                    </div>
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="Address">Address</label> 
                                        <input type="text" class="form-control" placeholder="Address" name="address" required = "true">
                                    </div>
                                        </div>
                                        <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="Contact">Contact</label>  
                                        <input type="text" class="form-control" placeholder="Contact" maxlength="10" name="contact" required = "true">
                                    </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                    <div class="form-group">
                                        <label for="Gender">Gender</label>
                                        <select class="form-control">
                                            <option>Select value</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="birthday">Date of Birth</label> <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="birthday" required = "true">
                                    </div>
                                        </div>
                                        <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="Bloodgroup">Blood Group</label>
                                        <select class="form-control">
                                            <option>Select Blood group</option>
                                            <option>A+Ve</option>
                                            <option>A-Ve</option>
                                            <option>B+Ve</option>
                                            <option>B-Ve</option>
                                            <option>AB+Ve</option>
                                            <option>AB-Ve</option>
                                            <option>O+Ve</option>
                                            <option>O-Ve</option>
                                        </select>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group">
                                            <label for="state">State</label>
                                            <select class="form-control">
                                                <option>Select state</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                            <label for="city">City</label>
                                            <select class="form-control">
                                                <option>Select city</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <label for="bank">Blood Bank</label>
                                            <select class="form-control">
                                                <option>Select blood bank</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group">
                                            <label for="tdate">Tentative date</label>
                                            <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tdate" required = "true">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                            <label for="id">GoI ID</label>
                                            <select class="form-control">
                                            <option>Select value</option>
                                            <option>Aadhar Number</option>
                                            <option>Driving License</option>
                                            <option>Govt Authority Identifier</option>
                                            <option>PAN</option>
                                            <option>Passport Number</option>
                                            <option>Voter Id</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <label for="id_number">GoI ID Number</label>
                                            <input type="text" class="form-control" name="id_number" required="true">
                                            </div>
                                        </div>
                                    </div><br>
                                    <center>
                                        <button type="submit" name="submit" class="btn text-warning btn-danger">Submit Request</button><br><br>
                                    </center>
                                </form><br/>
                            </div>
 
                        </div>
                    </div>
                </div>
                    </div>
                </div>
        </div>
            
      
        <?php 
    require('footer.php');
?>
    </body>