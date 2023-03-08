<?php 

include('configuration/db_config.php');
include('dashboard_navbar.php');
session_start();
?>

<div class="container"> 


<form method="POST" >

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">My Bio</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bio"></textarea>
</div>


<button type="submit" class="btn btn-primary form-control" name="updateBio">Update My Bio</button>
</form>


</div>

<?php 
if(isset($_POST['updateBio']))
{
	
	$userbioDetails = $_POST['bio'];

	$updateDetails = mysqli_query($config,"UPDATE individual_users SET user_bio='$userbioDetails' WHERE email='{$_SESSION['loggedinUser']}'");

	echo "<script type='text/javascript'>
				swal({
				  title: 'Bio Updated!',
				  text: 'User Details and Bio Updated Successfully',
				  icon: 'success',
				  button: 'View My Profile',
				}).then(function(){
					window.location.href = 'user_dashboard.php';
					});
			  </script>";
}


?>