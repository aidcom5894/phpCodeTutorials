<?php 

	
		session_start();
		unset($_SESSION['loggedinUser']);
		session_destroy();
		echo "<script>alert('logged Out successfully');
		window.location.href = 'login.php';

		</script>";
		;
		

?>