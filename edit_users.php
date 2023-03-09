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

<div class="container" style="margin-top:36px;">

<form method="POST">
<?php 

$id = $_GET['id'];
$getDetails = mysqli_query($config,"SELECT * FROM individual_users WHERE id='$id'");
while ($row = mysqli_fetch_assoc($getDetails)) 
{
	$user_name = $row['fullname'];
	$user_email = $row['email'];
	$user_contact = $row['contact'];
	$user_password = $row['password'];
	$user_bio = $row['user_bio'];
	
}

?>
<div class="mb-3">
<label class="form-label"><strong>Admin Name:</strong></label>
<input type="text" class="form-control" id="adminName" name="userName" aria-describedby="emailHelp" value="<?php echo $user_name; ?>">
</div>

<div class="mb-3">
<label class="form-label"><strong>Admin Email:</strong></label>
<input type="text" class="form-control" id="adminName" name="userEmail" aria-describedby="emailHelp" value="<?php echo $user_email; ?>">
</div>

<div class="mb-3">
<label class="form-label"><strong>Admin Contact:</strong></label>
<input type="text" class="form-control" id="adminName" name="userContact" aria-describedby="emailHelp" value="<?php echo $user_contact; ?>">
</div>

<div class="mb-3">
<label class="form-label"><strong>Admin Password:</strong></label>
<input type="text" class="form-control" id="adminName" name="userPassword" aria-describedby="emailHelp" value="<?php echo $user_password; ?>">
</div>

<div class="mb-3">
<label class="form-label"><strong>Admin BIO:</strong></label>
 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="userBio"><?php echo $user_bio; ?></textarea>
</div>


<button type="submit" class="btn btn-primary form-control" name="updateUser">Submit</button>
</form>

</div>


<?php 

if(isset($_POST['updateUser']))
{
	$updatedName = $_POST['userName'];
	$updatedEmail = $_POST['userEmail'];
	$updatedContact = $_POST['userContact'];
	$updatedPassword = $_POST['userPassword'];
	$updatedBIO = $_POST['userBio'];

	$updateQuery = mysqli_query($config,"UPDATE individual_users SET fullname='$updatedName',email='$updatedEmail',contact='$updatedContact',password='$updatedPassword',user_bio='$updatedBIO'");

	if($updateQuery)
	{
		echo "<script>alert('User Data Updated Successully');window.location.href='updateDetails.php'</script>";
	}
	else
	{
		echo "no changes made";
	}
	
}

?>