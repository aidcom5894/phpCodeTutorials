<?php 

include('configuration/db_config.php');

include('dashboard_navbar.php');

session_start();

if(!isset($_SESSION['loggedinUser']))
{
	echo "<script type='text/javascript'>
				swal({
				  title: 'Access Failed!',
				  text: 'You cannot Directly access Dashboard. First you need to Login to Access Dashboard. Please Login.',
				  icon: 'error',
				  button: 'Access Dashboard',
				}).then(function(){
					window.location.href = 'login.php';
					});
			  </script>";
}



?>

<div class="container" style="margin-top: 36px;">

	<?php 

		
		$fetchAllDetails = mysqli_query($config,"SELECT * FROM individual_users WHERE email='{$_SESSION['loggedinUser']}'");

		while($row = mysqli_fetch_assoc($fetchAllDetails))
		{
			$username = $row['fullname'];
			$email = $row['email'];
			$contact = $row['contact'];
			$image = $row['user_avatar'];
			$referalCode = $row['referal_code'];
			$joiningDate = $row['portal_registration_date'];
			$userBio = $row['user_bio'];
		}


	?>
	

<div class="card mb-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="<?php echo $image; ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title"><strong><?php echo $username; ?></strong></h5>
<p class="card-text"><?php echo $userBio; ?></p>
<a href="userLogout.php" class="btn btn-primary form-control">Logout</a>
<p class="card-text"><small class="text-muted"><?php echo $joiningDate; ?></small></p>
</div>
</div>
</div>
</div>


</div>


