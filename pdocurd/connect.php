<?php

	$servername = "localhost";
	
	$username = "root";
	
	$password = "";
	
	try{
	
		$conn = new PDO("mysql:host=$servername;dbname=curd",$username, $password);
		
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		//echo "Coonected successfuly";
		
	}
	catch(PDOException $e){
	
		echo "COnnection Failed". $e->getMessage();
		
	
	}
		

?>
	
	
	