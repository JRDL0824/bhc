<?php
include('includes/header.php'); 
include('includes/admin_navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div style="float:right;">

    <?php
 $sql = "SELECT * FROM announcement ";
 $result = mysqli_query($conn,$sql);
 ?>

     </div>

<!-- end of search -->
        <h6 class="m-0 font-weight-bold text-primary">
         Announcements   
        </h6>

     <!-- Topbar Search -->
 
  </div>
 <!-- display all the data  -->
  <div class="card-body">

    <div class="table-responsive">

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th style="display:none"> I.D </th>
            <th> What </th>
            <th> When </th>
            <th>Action</th>
             
          </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM announcement ";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
          <tr>
          <td style='display:none'>$row[a_id];</td>
            <td>$row[a_what]</td>
            <td>$row[a_when]</td>
            <td>
            <a href='brgyadmin_displayannouncement.php?a_id=$row[a_id];' name='details_btn' class='btn'>
                Details
                <a class='btn btn-danger' href='brgy_a_delete.php?a_id=$row[a_id]'>Delete</a>
              </a>
            </td>
          </tr>
          ";
 }
   ?>
        </tbody>
      </table>
      <!-- end of dispaly data -->
    </div>
  </div>


</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>