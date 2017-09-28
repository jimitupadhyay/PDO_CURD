<?php
	include("connect.php");
session_start();

if(!isset($_SESSION['user'])){
	
	echo "<script text='text/javascript'>document.location.href = 'index.php';</script>";
	
}

if(isset($_REQUEST['d'])){
	
	$deleteResult = $conn->query("delete from user where id=".$_REQUEST['d']);
	
}


$result = $conn->query('select * from user');


	
?>

<html>

	<head>
		<title>Home Page</title>
	</head>
	<body>
	
		<table>
			<tr><th>HI | <a href="logout.php">Log out</a></th></tr>
			<tr><th><a href="new.php">New Record</a></th></tr>
			<tr><td>ID</td><td>Name</td><td>Email</td><td>Delete</td><td>Update</td></tr>
			<?php
			
				foreach($result as $row){
				
					echo '<tr><td>'.$row["id"].'</td><td>'.$row["name"].'</td><td>'.$row["email"].'</td><td><a href="home.php?d='.$row['id'].'">Delete</a></td><td><a href="new.php?up='.$row['id'].'">Update</a></td></tr>';
					
				}
			
			?>
		</table>
	
	</body>

</html>