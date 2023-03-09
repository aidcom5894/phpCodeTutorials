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

<div class="container-fluid" style="margin-top:36px;">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Bio</th>
                <th>Referal Code</th>
                <th>User Avatar</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                $fetchIndDetails = mysqli_query($config,"SELECT * FROM individual_users");

                while($row = mysqli_fetch_assoc($fetchIndDetails)) { ?>
                    
               
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['user_bio']; ?></td>
                <td><?php echo $row['referal_code']; ?></td>
                <td><img src="<?php echo $row['user_avatar']; ?>" class="img-thumbnail" alt="..." style="width: 90px; height: 90px;"></td>
                <td><a href="edit_users.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
                
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Bio</th>
                <th>Referal Code</th>
                <th>User Avatar</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
</div>




<script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>