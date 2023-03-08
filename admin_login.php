<?php 

include('configuration/db_config.php');
// include('navbar_menu.php');
include('configuration/base_url.php');


?>


<!-- section for body with horizontally and vertically centered content starts here -->

<div class="hold-transition register-page">
<div class="register-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="#" class="h1"><b>Admin</b> Login</a>
</div>
<div class="card-body">
<p class="login-box-msg">Login now to access Dashbaord</p>

<form method="POST">

<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email" name="email" >
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/></svg>
</div>
</div>
</div>


<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password" name="password">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2h1m-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3Z"/></svg>
</div>
</div>
</div>

<button type="submit" class="btn btn-primary form-control" name="userLogin">Login</button>

<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/></svg></a>

<a href="admin_registration.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="float: right;"><path fill="currentColor" fill-rule="evenodd" d="M16.67 13.13C18.04 14.06 19 15.32 19 17v3h4v-3c0-2.18-3.57-3.47-6.33-3.87z"/><circle cx="9" cy="8" r="4" fill="currentColor" fill-rule="evenodd"/><path fill="currentColor" fill-rule="evenodd" d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4c-.47 0-.91.1-1.33.24a5.98 5.98 0 0 1 0 7.52c.42.14.86.24 1.33.24zm-6 1c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/></svg></a>
</form>
<?php 
	if(isset($_POST['userLogin']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		

		$matchDetails = mysqli_query($config,"SELECT email,password FROM individual_users WHERE email='$email' AND password='$password'");

		if(mysqli_num_rows($matchDetails) > 0)
		{
			session_start();
			$_SESSION['loggedinUser'] = $email;
			header("location:user_dashboard.php");
		}
		else
		{
			echo "<script>alert('Login Failed')</script>";
		}
		// header("location:user_dashboard.php");
	}
?>

</div>

</div>
</div>
</div>
<!-- section for body with horizontally and vertically centered content ends here -->

