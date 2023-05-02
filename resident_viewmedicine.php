<?php
include('includes/header.php'); 
include('includes/resident_navbar.php'); 

?>
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div style="float:right;">
      <?php
      $sql = "SELECT * FROM medicine ";
      $result = mysqli_query($conn,$sql);
      ?>
      </div>
      <h6 class="m-0 font-weight-bold text-primary">
        
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> Brand name </th>
              <th> Generic name </th>
              <th>Dossage</th>
              <th>Supplies</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td><?php echo $row['b_name']; ?></td>
              <td><?php echo $row['g_name']; ?></td>
              <td><?php echo $row['dossage']; ?></td>
              <td><?php echo $row['supplies']; ?></td>
            </tr>
            <?php
            }
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