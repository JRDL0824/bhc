<?php
include('includes/header.php'); 
include('includes/staff_navbar.php'); 
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div style="float:right;"></div>
      <h6 class="m-0 font-weight-bold text-primary">Announcements</h6>
    </div>
    <div class="card-body">
      <div>
        <?php
        $id = $_GET['a_id'];
        $sql = "SELECT * FROM announcement WHERE a_id = '$id'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)> 0){
          while($patient = mysqli_fetch_assoc($result)){
        ?>
        <div class="card-footer">
          <h3>What: <?php echo $patient['a_what']; ?></h3><br><hr>
          <h3>Where: <?php echo $patient['a_where']; ?></h3><br><hr>
          <h3>When: <?php echo $patient['a_when']; ?></h3><br><hr>
          <h3>Description: <?php echo $patient['a_desc']; ?></h3><br><hr>
        </div>
        <hr>
        <a href="centerstaff_viewannouncement.php">  
          <button type="button" class="btn btn-primary">Back</button>
        </a>
      </div>
      <?php
      }
    }else{
      echo "0 result";
    }
    ?>
    </div>
  </div>

<?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>