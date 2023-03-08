<?php 
include('configuration/db_config.php');
include('admin_navbar.php');
?>

<div class="container-fluid" style="margin-top:36px;">
	<form method="POST" action="saveEdit.php?id=<?php echo $id; ?>">
		<table id="example" class="display" style="width:100%">

        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
        	<?php 

			$id = $_GET['id'];
			$fetchDetails = mysqli_query($cofig,"SELECT * FROM individual_users WHERE id='$id'");
			
			while($row=mysqli_fetch_array($fetchDetails))
			{ ?>

			
            <tr>
                <td><?php echo $row['fullname']; ?></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
	</form>
</div>


<script type="text/javascript">
	$(document).ready(function () {
    $('#example').DataTable();
});
</script>