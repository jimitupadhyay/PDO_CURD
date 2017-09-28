<?php

	session_start();
	
	if(isset($_SESSION['user'])){
			
			unset($_SESSION['user']);
			echo "<script type='text/javascript'>document.location.href='index.php'</script>";
	}
		

?>
	
	
	