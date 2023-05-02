<?php
include('includes/header.php'); 
include('includes/admin_navbar.php'); 
?>

<div class="container-fluid">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Announcement details</h3>
    </div>
    <form action="" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="what">What:</label>
          <input type="text" name="a_what" class="form-control" placeholder="What">
        </div>
        <div class="form-group">
          <label for="where">Where:</label>
          <input type="text" name="a_where" class="form-control" placeholder="Where">
        </div>
        <div class="form-group">
          <label>When:</label>
          <input type="date" name="a_when" class="form-control" >
        </div>
        <div class="form-group">
          <label for="when">Description:</label>
          <input type="text" name="a_desc" class="form-control" placeholder="Description">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="a_post" value="Post">
        </div>
      </div>
    </form>
  </div>
</div>

<?php 
if(isset($_POST['a_post'])){
  $a_what = $_POST['a_what'];
  $a_where = $_POST['a_where'];
  $a_when = $_POST['a_when'];
  $a_desc = $_POST['a_desc'];
  $sql = "INSERT INTO announcement (a_what,a_where,a_when,a_desc) VALUES ('$a_what','$a_where','$a_when','$a_desc')";
  if(mysqli_query($conn,$sql)){
    echo '<script>
    swal({
      title: "Success",
      text: "Announcement posted",
      type: "success",
      icon: "success",
      button: "Okay",
    }).then(function() {
      window.location = "brgyadmin_viewannouncement.php";   //replace google.com with the link u want to go when unsuccesfull login
    });
    </script>';
  } else{
    echo "ERROR:" .$sql.mysqli_error($conn);
  }
}
?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>