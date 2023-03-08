<?php 

include('configuration/db_config.php');
include('admin_navbar.php');

session_start();

if(!isset($_SESSION['loggedinAdmin']))
{
	echo "<script>

			alert('No Logged in Admin Found');

			window.location.href = 'admin_login.php';

		  </script>";
}

$fetchDBdata = mysqli_query($config,"SELECT * FROM admin_registration WHERE admin_email = '{$_SESSION['loggedinAdmin']}'");

while ($row = mysqli_fetch_assoc($fetchDBdata)) 
{
	$myadminName = $row['admin_name'];
	$adminImage = $row['admin_avatar'];
	$referalID = $row['referal_id'];
	$joiningDate = $row['registrationDate'];
}

?>




<div class="container" style="margin-top:36px;">

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">

    <div class="col-md-4">
      <img src="<?php echo $adminImage; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><strong><?php echo $myadminName; ?></strong></h5>
        <p class="card-text"><?php echo $referalID; ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $joiningDate; ?></small></p>
        <a href="adminLogout.php" class="btn btn-primary form-control">Logout</a>
      </div>
    </div>
  </div>
</div>

</div>