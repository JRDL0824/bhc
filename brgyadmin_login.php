<?php
require 'includes/conn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Barangay Sambal Ilaya Health Center Appointment System</title>

  <!-- Custom fonts for this template-->  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <div class="container">
      <div class="row justify-content-center">
  <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Barangay Sambal Ilaya Health Center Appointment System</h1>
                <h1 class="h4 text-gray-900 mb-4">Baragay Admin Login</h1>
              </div>
                <form class="user" action="" method="POST">
                    <div class="form-group">
                    <input type="text" name="b_admin" class="form-control form-control-user" placeholder="Enter Barangay Admin User">
                    </div>
                    <div class="form-group">
                    <input type="password" name="b_password" class="form-control form-control-user" placeholder="Enter Barangay Admin Password">
                    </div>
                    <input type="submit" class="btn login_btn btn-primary btn-user btn-block" name="login_btn" value="Login">
                    <hr>
                </form>

                <?php 
                    if(isset($_POST['login_btn'])){
                      $b_admin = $_POST['b_admin'];
                      $b_password = $_POST['b_password'];

                      $sql = "SELECT * FROM brgyadmin WHERE b_admin='$b_admin'";
                      $result = mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result) > 0){
                        while($brgyadmin = mysqli_fetch_assoc($result)){
                            if($b_admin == $brgyadmin['b_admin'] && $b_password == $brgyadmin['b_password']){
                                $_SESSION['b_admin'] = $b_admin;
                               echo '<script>
                        			swal({
                        				title: "Success",
                        				text: "Redirecting in 2 seconds.",
                        				type: "success",
                        				icon: "success",
                        			     timer: 2000,
                                        showConfirmButton: false
                        			}).then(function() {
                        				window.location = "brgyadmin_viewmedicine.php";   //replace google.com with the link u want to go when unsuccesfull login
                        			});
                        			</script>';
                            }else{
                                echo '<script>
                                			swal({
                                				title: "Error",
                                				text: "Wrong Password",
                                				type: "error",
                                				icon: "error",
                                				button: "Okay",
                                			}).then(function() {
                                				window.location = "brgyadmin_login.php";   //replace google.com with the link u want to go when unsuccesfull login
                                			});
                                			</script>';
                            }
                        }
                    }else{
                        echo '<script>
                            			swal({
                            				title: "Error",
                            				text: "Admin Only!",
                            				type: "error",
                            				icon: "error",
                            				button: "Okay",
                            			}).then(function() {
                            				window.location = "index.php";   //replace google.com with the link u want to go when unsuccesfull login
                            			});
                            			</script>';
                    }
                  }
                  
                  ?>

              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                 <span>Copyright &copy; Barangay Sambal Ilaya Health Center Appointment System 2023 </span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include('includes/scripts.php'); 
?>
<!-- End of Footer -->
</div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->


</body>
<!-- datatable java script -->
<script>
$(document).ready(function(){
$('#dataTable').dataTable();
});
</script>
</html>