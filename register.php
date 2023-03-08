<?php 

include('configuration/db_config.php');
include('configuration/base_url.php');
include('navbar_menu.php') ;

?>


<!-- section for body with horizontally and vertically centered content starts here -->

<div class="hold-transition register-page">
<div class="register-box">
<?php 

if(isset($_POST['userRegistration']))
{
	// defining variables for input fields

	$username = $_POST['fullname'];
	$usermail = $_POST['useremail'];
	$usercontact = $_POST['contactno'];
	$userpassword = $_POST['password'];
	$adminReferrals = $_POST['referalCodes'];
	$userbio = "";

	// to handle image file and uploading to database
	$targetFolder = "useravatar/";
	$imageOrgName = $_FILES['userphoto']['name'];
	$imageTmpName = $_FILES['userphoto']['tmp_name'];
	$imageAddress = $base_url.$targetFolder.$imageOrgName;


	$registerUser = "INSERT INTO individual_users (fullname,email,contact,password,user_bio,referal_code,user_avatar) VALUES ('$username','$usermail','$usercontact','$userpassword','$userbio','$adminReferrals','$imageAddress')";

	$checkExistance = mysqli_query($config,"SELECT fullname,email,contact FROM individual_users WHERE fullname='$username' || email='$usermail' || contact='$usercontact'");

	

	if(mysqli_num_rows($checkExistance)>0)
	{
		echo "<script type='text/javascript'>
				swal({
				  title: 'User Already Exist!',
				  text: 'It seems you are already registered with the same Details in our Portal. We usually do not permit existing users to create account with same details',
				  icon: 'error',
				  button: 'Access Login Portal',
				}).then(function(){
					window.location.href = 'index.php';
					});
			  </script>";
	}

	elseif(mysqli_query($config,$registerUser))
	{
		echo "<script type='text/javascript'>
				swal({
				  title: 'Registration Complete!',
				  text: 'You have successfully registered to the PHP Portal. Please Login to access the Dashboard',
				  icon: 'success',
				  button: 'Access Login Portal',
				}).then(function(){
					window.location.href = 'login.php';
					});
			  </script>";
			  move_uploaded_file($imageTmpName,$targetFolder.$imageOrgName);
			  
	}
	
	else
	{
		echo "<script type='text/javascript'>
				swal({
				  title: 'Sorry, we could not register!',
				  text: 'User Registration Failed. This may be because you tried entering something that is not supported by Our Database.',
				  icon: 'error',
				  button: 'Register Again',
				}).then(function()
					window.location.href='register.php';
				);
			  </script>";
	}

	
}

?>
<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="#" class="h1"><b>PHP</b> Tutorials</a>
</div>
<div class="card-body">
<p class="login-box-msg">Enroll now to access Dashbaord</p>

<form action="#" method="post" enctype="multipart/form-data">

<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Full name" name="fullname" required="" autocomplete="off">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/></svg>
</div>
</div>
</div>

<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email" name="useremail" required="" autocomplete="off">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m20 8l-8 5l-8-5V6l8 5l8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"/></svg>
</div>
</div>
</div>

<div class="input-group mb-3">
<input type="number" class="form-control" placeholder="Contact No." name="contactno" required="" autocomplete="off">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15 2a1 1 0 0 0-1 1v3h-4c-1.11 0-2 .89-2 2v12c0 1.11.89 2 2 2h5c1.11 0 2-.89 2-2V8c0-.74-.4-1.38-1-1.72V3a1 1 0 0 0-1-1m-5 6h5v5h-5V8m0 7h1v1h-1v-1m2 0h1v1h-1v-1m2 0h1v1h-1v-1m-4 2h1v1h-1v-1m2 0h1v1h-1v-1m2 0h1v1h-1v-1m-4 2h1v1h-1v-1m2 0h1v1h-1v-1m2 0h1v1h-1v-1Z"/></svg>
</div>
</div>
</div>


<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password" name="password" required="" autocomplete="off">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2h1m-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3Z"/></svg>
</div>
</div>
</div>

<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Referal Code (if any)" name="referalCodes">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5m3 1v12h4v-2H8V8h2V6H6m10 10h-2v2h4V6h-4v2h2v8Z"/></svg>
</div>
</div>
</div>

<div class="input-group mb-3">
<input type="file" class="form-control" name="userphoto">
<div class="input-group-append">
<div class="input-group-text">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M4 5h3l2-2h6l2 2h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2m12 12v-1c0-1.33-2.67-2-4-2s-4 .67-4 2v1h8m-4-8a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2Z"/></svg>
</div>
</div>
</div>

<button type="submit" class="btn btn-primary form-control" name="userRegistration">Register Here</button>
</form>

</div>

</div>
</div>
</div>
<!-- section for body with horizontally and vertically centered content ends here -->


<?php 
include('master_footer.php');

?>