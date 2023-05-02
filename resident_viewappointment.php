<?php
include('includes/header.php'); 
include('includes/resident_navbar.php'); 
include('includes/conn.php');
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div style="float:right;">
      <?php
      $sql = "SELECT * FROM appointment ";
      $result = mysqli_query($conn,$sql);
      ?>
      </div>
      <h6 class="m-0 font-weight-bold text-primary">Booked appointment</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> I.D </th>
              <th> Firstname </th>
              <th> Lastname </th>
              <th> Date </th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td><?php echo $row['p_id']; ?></td>
              <td><?php echo $row['r_fname']; ?></td>
              <td><?php echo $row['r_lname']; ?></td>
              <td><?php echo $row['r_day']; ?></td>
              <td>
                <a href="resident_displayappointment.php?p_id=<?php echo $row['p_id']; ?>" name="details_btn" class="btn btn-info">
                Details
              </a>
            </td>
          </tr>
          <?php }
          }else {
            echo "0 result";
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>