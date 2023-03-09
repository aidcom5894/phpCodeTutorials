<?php 

session_start();
if(!isset($_SESSION['loggedinAdmin']))
{
	echo "<script>alert('No Logged In Admin Found');window.location.href='admin_login.php';</script>";
}

include('configuration/base_url.php');
include('configuration/db_config.php');
include('admin_navbar.php');

?>

<?php 

	$fetchDetails = mysqli_query($config,"SELECT * FROM admin_registration WHERE admin_email='{$_SESSION['loggedinAdmin']}'");
	while ($row = mysqli_fetch_assoc($fetchDetails)) 
	{
		$adminName = $row['admin_name'];
		$adminEmail = $row['admin_email'];
		$adminContact = $row['admin_contact'];
		$referalID = $row['referal_id'];
		$profilePic = $row['admin_avatar'];
		$joiningDate = $row['registrationDate'];
	}
?>

<div class="container" style="margin-top:36px;">
	
<div class="card mb-3" style="max-width: 540px;">
<div class="row g-0">
<div class="col-md-4">
<img src="<?php echo $profilePic; ?>" class="img-fluid rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title"><strong><?php echo $adminName; ?></strong></h5>
<p class="card-text">Welcome <?php echo $adminName.".<br>"." Your Referal ID is: $referalID"; ?></p>
<a href="adminLogout.php" class="btn btn-primary form-control"> Logout</a>
<p class="card-text"><small class="text-muted">You have registered on the Portal on: <?php echo $joiningDate; ?></small></p>
</div>
</div>
</div>
</div>
</div>