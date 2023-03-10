<?php

include('configuration/db_config.php') ;
include('navbar_menu.php') ;

?>




<div class="container-fluid" style="margin-top: 36px;">
	<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

	<?php 

		$countAdmin = mysqli_query($config,"SELECT * FROM admin_registration");
		$countIndividual = mysqli_query($config,"SELECT * FROM individual_users");
		$countReferalCodes = mysqli_query($config,"SELECT referal_code FROM individual_users WHERE referal_code<>''");

	?>

<div class="small-box bg-info">
<div class="inner">
<h3><?php echo mysqli_num_rows($countAdmin); ?></h3>
<p>Admin Registered</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3><?php echo mysqli_num_rows($countIndividual); ?></h3>
<p>Individual Users</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>0</h3>
<p>Benificiaries Registered</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3><?php echo mysqli_num_rows($countReferalCodes); ?></h3>
<p>Referal Codes Issues</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
</div>
</section>
</div>