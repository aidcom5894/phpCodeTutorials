<?php 

	
		session_start();
		unset($_SESSION['loggedinAdmin']);
		session_destroy();
		echo "<script>alert('logged Out successfully');
		window.location.href = 'admin_login.php';

		</script>";
		;
		

?>