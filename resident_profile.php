<?php
include 'includes/conn.php';
session_start();
$u_id = $_SESSION['u_id'];

include('includes/header.php'); 
include('includes/resident_navbar.php'); 
?>

<div class="container-fluid">
  <div class="row">
    <div class="container-fluid">
      <div class="card shadow mb-5">
        <div class="card-header py-3">
          <div style="float:right;"></div>
          <h3 class="m-0 font-weight-bold text-primary">User's Profile</h3>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <?php
                $select = mysqli_query($conn, "SELECT * FROM `resident` WHERE u_id = '$u_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                  $fetch = mysqli_fetch_assoc($select);
                }
                ?>
                <tr>
                  <th> <strong> Username:</strong> </th>
                  <td><?php echo  $fetch['u_name'];  ?></td>
                </tr>
                <tr>
                  <th> <strong> Fullname:</strong> </th>
                  <td><?php echo $fetch['u_fname'];  ?></td>
                </tr>
                <tr>
                  <th> <strong> Address:</strong> </th>
                  <td><?php echo $fetch['u_address'];  ?></td>        
                </tr>
                <tr>
                  <th> <strong> Contact no.:</strong> </th>
                  <td><?php echo $fetch['u_contact'];  ?></td>        
                </tr>
                <tr>
                  <th> <strong>Email:</strong> </th>
                  <td><?php echo $fetch['u_email'];  ?></td>        
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <?php
        include('includes/scripts.php');
        ?>