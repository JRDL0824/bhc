<?php
include('includes/header.php'); 
include('includes/admin_navbar.php'); 

require 'includes/conn.php';

?>

<div class="container-fluid">
<div class="card card-primary">
   
  <div class="card-header">
    <h3 class="card-title">Upload medicine data</h3>
  </div>
  
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="when">Brand name:</label>
                    <input type="text" name="b_name" class="form-control"  placeholder="Brand name">
                  </div>
                  <div class="form-group">
                    <label for="where">Generic name:</label>
                    <input type="text" name="g_name" class="form-control"  placeholder="Generic name">
                  </div>
                  <div class="form-group">
                    <label for="what">Dossage:</label>
                    <input type="text" name="dossage" class="form-control"  placeholder="Dossage">
                  </div>
                  <div class="form-group">
                    <label for="what">Supplies:</label>
                    <input type="text" name="supplies" class="form-control"  placeholder="Supplies">
                  </div>
                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="m_upload" value="Upload">
                </div>
              </form>
</div>
</div>

<?php 
if(isset($_POST['m_upload'])){
    $b_name = $_POST['b_name'];
    $g_name = $_POST['g_name'];
    $dossage = $_POST['dossage'];
    $supplies = $_POST['supplies'];


    $sql = "INSERT INTO medicine (b_name,g_name,dossage,supplies) VALUES ('$b_name','$g_name','$dossage','$supplies')";
    if(mysqli_query($conn,$sql)){
      echo '<script>
			swal({
				title: "Success",
				text: "Medicine data uploaded",
				type: "success",
				icon: "success",
				button: "Okay",
			}).then(function() {
				window.location = "brgyadmin_viewmedicine.php";   //replace google.com with the link u want to go when unsuccesfull login
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