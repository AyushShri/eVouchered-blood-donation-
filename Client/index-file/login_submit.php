<?php 
    require('common.php');
    $email = $_POST["email"];
    $email = mysqli_real_escape_string($conn1, $email);
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($conn1, $password);
    $password = MD5($password);
    $query = "SELECT id,email FROM users WHERE email ='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($conn1, $query)or die($mysqli_error($conn1));
    $num = mysqli_num_rows($result) or die($mysqli_error($conn1));
    if ($num == 0) {
        $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: login.php?error=' . $error);
} else {  
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: available.php');
}
    
?>
