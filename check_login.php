<?php
    require("connect.php");
    
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$query = "select * from stfb_login where emailid='$emailid' and pwd='$password'";
	$result = $con->query($query);
	$row=mysqli_fetch_array($result);
	
	session_start();
	if($row["emailid"]==$emailid && $row["pwd"]==$password)
	{
	    $_SESSION["login_value"] = 1;
	    $_SESSION["checker"]=1;
	    header("Location:feedback_home.php");
	}
	else
	{
		$_SESSION["login_value"] = 0;
		header("Location:index.php");
	}
?>