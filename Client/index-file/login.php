<?php 
    require("common.php");
       if (isset($_SESSION['email'])) {
    header('location: available.php');
}
?>
<html>
    <head>
        <title>Login</title>
       <<meta charset="UTF-8">
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
        <div class="loginbox">
        <div class="container">  
        <div class="row">
            <div class="col-xs-5 col-lg-offset-4">
                <div class="panel panel-default panel-margin">
                    <div class="panel-heading" style="color: rgb(128,0,0);">
                        LOGIN
                    </div>
                    <div class="panel-body">
                        <form action="login_submit.php" method="POST">
                            <div class="form-group">
                                <label>
                                    <input type="email" class="form-control" name="email" required="true" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="password" class="form-control" name="password" required="true" placeholder="Password" >
                                </label>
                            </div>
                        
                            <button type="submit" name="submit" class="btn btn-danger">LOGIN</button><br>
                            </form><br>
                    </div>
                    <div class="panel-footer">
                        Don't have an account?
                        <a href="signup.php">Register</a>
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
</html>
