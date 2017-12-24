<?php

   $con = mysqli_connect("localhost", "root", "5834100107", "stock check");
   mysqli_set_charset($con,"utf8");

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM login WHERE    usename='$username' AND password='$password'";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    if ($result){
        session_start();
        $_SESSION['login_id'] = $row_user['login_id'];
        header("Location:size.php");
       // header("Location:Home.php");
    } else {
        echo $result;
        echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }