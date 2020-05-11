<?php
    require("connect.php");
    
    
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    
    $sql = "insert into stfb_login (name,emailid,pwd) values ('$name','$emailid','$password')";
    
    $status = mysqli_query($con,$sql);
    
    if($status){
        $_SESSION['signup_msg'] = "success";
        header("Location:index.php");
    }
    else{
        $_SESSION['signup_msg'] = "failure";
        header("Location:index.php");
    }
    
?>