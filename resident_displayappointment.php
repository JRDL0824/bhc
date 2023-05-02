<?php
include('includes/header.php'); 
include('includes/resident_navbar.php'); 
include('includes/conn.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div style="float:right;"></div>
            <h3 class="m-0 font-weight-bold text-primary">Admin Profile</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <?php
                    $id = $_GET['p_id'];
                    $sql = "SELECT * FROM appointment WHERE p_id = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)> 0){
                        while($patient = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <tr>
                        <th> <strong>Firstname:</strong> </th>
                        <td><?php echo $patient['r_fname']; ?></td>        
                    </tr>
                    <tr>
                        <th> <strong> Lastname:</strong> </th>
                        <td><?php echo $patient['r_lname']; ?></td>
                    </tr>
                    <tr>
                        <th> <strong> Contact no.:</strong> </th>
                        <td><?php echo $patient['r_contact']; ?></td>        
                    </tr>
                    <tr>
                        <th> <strong> Address:</strong> </th>
                        <td><?php echo $patient['r_address']; ?></td>        
                    </tr>
                    <tr>
                        <th> <strong> Reason:</strong> </th>
                        <td><?php echo $patient['r_reason']; ?></td>
                    </tr>
                    <tr>
                        <th> <strong> Date:</strong> </th>
                        <td><?php echo $patient['r_day']; ?></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="resident_viewappointment.php" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
}
}else{
    echo "0 result";
}
include('includes/scripts.php');
include('includes/footer.php');
?>