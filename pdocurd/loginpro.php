<?php

include("connect.php");

$name = $_REQUEST['name'];

$password = $_REQUEST['password'];

$result = $conn->query("select * from user");


foreach($result as $row){
	
	if($name == $row['name']){
		
		if($password == $row['password']){
			
			echo "Login SuccessFull";
			session_start();
			$_SESSION['user'] = $row['id'];
			echo "<script type='text/javascript'>alert('Login SuccessFull');</script>";
			echo "<script type='text/javascript'>document.location.href='home.php';</script>";
			}
			else{
				
				echo "Wrong Password";
				echo "<script type='text/javascript'>alert('Wrong Password');</script>";
				echo "<script type='text/javascript'>document.location.href='index.php';</script>";
				}
		
		}
		else{
			
			//echo "NO user FOund";
			echo "<script type='text/javascript'>alert('No User Found');</script>";
			echo "<script type='text/javascript'>document.location.href='index.php';</script>";
			}
	
}


?>
