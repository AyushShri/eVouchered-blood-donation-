<?php 
    require('common.php');
    if(isset($_SESSION['email'])){
        header("location:available.html");
    }
?>
<html>
    <head>
        <title>Sign up</title>
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
            require 'header.php';
        ?>
        <div class="signupbox">
        <div class="container">
            <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div class="panel-margin">
                        <h2>SIGN UP</h2>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="username" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                            </div>
            
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <br>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            require 'footer.php';
        ?>
        
    </body>
</html>

