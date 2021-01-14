<?php 
    require('common.php');
    
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($conn1, $name);
    
    $email = $_POST['e-mail'];
    $email = mysqli_real_escape_string($conn1, $email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($conn1, $password);
    $password = MD5($password);
    
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $regex_num = "/^[789][0-9]{9}$/";
    
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn1, $query) or die($mysqli_error($conn1));
    $num = mysqli_num_rows($result);
    
    if($num>0){
        $m = "<span class='red'>Email Already Exists</span>";
        header('location: signup.php?m1=' . $m);
    }
    else if (!preg_match($regex_email,$email)) {
            $m = "<span class='red'>Not a valid Email Id</span>";
            header('location: signup.php?m1=' . $m);
        }
    else {
    
    $query = "INSERT INTO users(name, email, password)VALUES('" . $name . "','" . $email . "','" . $password . "')";
    mysqli_query($conn1, $query) or die(mysqli_error($conn1));
    $user_id = mysqli_insert_id($conn1);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: available.php');
  }
?>  
    



