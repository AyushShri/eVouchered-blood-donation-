<?php 
    require('common.php');
    if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<html>
    <head>
        <title>Blood availablilty</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="stock">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-2">
                        <div class="panel panel-default panel-margin" >
                            <div class="panel-heading">
                                <h4 style="color: rgb(128,0,0); ">Stock Availability</h4>
                            </div>
                            <div class="panel-body">
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
                                        <label for="Bloodgroup">Blood Group</label>
                                        <select class="form-control">
                                            <option>All Blood groups</option>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
        <div class="col-sm-9 col-sm-offset-2">
            <table class="table table-bordered table-hover" style="margin-top: 85px;">
                <thead>
                    <tr style="color: rgb(128,0,0);">
                        <th>S.No.</th>
                        <th>Blood Bank</th>
                        <th>Availability</th>
                        
                    </tr>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                </thead>
            </table>
        </div>
        </div>
        </div>
      <?php
            require('footer.php');
        ?>
    </body>
</html>
