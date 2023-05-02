<?php
include('includes/header.php'); 
include('includes/resident_navbar.php'); 
include('includes/conn.php');
?>

<div class="container-fluid">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Book an appointment</h3>
    </div>
    <form action="" method="post">
      <div class="card-body">
        <div class="form-group">
          <label>Firstname</label>
          <input type="text" name="r_fname"class="form-control" placeholder="Enter firstname">
        </div>
        <div class="form-group">
          <label>Lastname</label>
          <input type="text" name="r_lname" class="form-control" placeholder="Enter lastname">
        </div>
        <div class="form-group">
          <label>Contact no.</label>
          <input type="text" name="r_contact" class="form-control" placeholder="Enter contact no.">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="r_address" class="form-control" placeholder="Enter address">
        </div>
        <div class="form-group">
          <label>Reason</label>
          <input type="text" name="r_reason" class="form-control" placeholder="Enter reason">
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="date" name="r_day" class="form-control" >
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary b_app" name="b_app" value="Book">
        </div>
      </div>
    </form>
  </div>
</div>
<?php
if(isset($_POST['b_app'])){
  $r_fname = $_POST['r_fname'];
  $r_lname = $_POST['r_lname'];
  $r_contact = $_POST['r_contact'];
  $r_address = $_POST['r_address'];
  $r_reason = $_POST['r_reason'];
  $r_day = $_POST['r_day'];
  
  $sql = "INSERT INTO appointment (r_fname,r_lname,r_contact,r_address,r_reason,r_day) VALUES ('$r_fname','$r_lname','$r_contact','$r_address','$r_reason','$r_day')";
  if(mysqli_query($conn,$sql)){
    echo '<script>
    swal({
      title: "Success",
      text: "Appointment booked",
      type: "success",
      icon: "success",
      button: "Okay",
    }).then(function() {
      window.location = "resident_viewappointment.php";   //replace google.com with the link u want to go when unsuccesfull login
    });
    </script>';
  } else{
    echo "ERROR:" .$sql.mysqli_error($conn);
  }
}
include('includes/scripts.php');
include('includes/footer.php');
?>
