<?php
include 'includes/conn.php';
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
                      <h1 class="h4 text-gray-900 mb-4">Resident Login</h1>
                    </div>
                    <form class="user" action="" method="POST">
                      <div class="form-group">
                        <input type="text" name="u_name" class="form-control form-control-user" placeholder="Enter username" required>
                      </div>
                      <div class="form-group">
                        <input type="password" name="u_password" class="form-control form-control-user" placeholder="Enter password" required>
                      </div>
                      <input type="submit" class="btn login_btn btn-primary btn-user btn-block" name="login_btn" value="Login">
                      <br>
                    </form>

                    <?php
                    if(isset($_POST['login_btn'])){
                      $u_name = mysqli_real_escape_string($conn, $_POST['u_name']);
                      $u_password = mysqli_real_escape_string($conn, $_POST['u_password']);
  
                      $select = mysqli_query($conn, "SELECT * FROM `resident` WHERE u_name = '$u_name' AND u_password = '$u_password'");
                      if(mysqli_num_rows($select) > 0){
                        $row = mysqli_fetch_assoc($select);
                        $_SESSION['u_id'] = $row['u_id'];
                        echo '<script>
                        swal({
                          title: "Success",
                          text: "Redirecting in 2 seconds.",
                          type: "success",
                          icon: "success",
                          timer: 2000,
                          showConfirmButton: false
                        }).then(function() {
                          window.location = "resident_profile.php";   //replace google.com with the link u want to go when unsuccesfull login
                        });
                        </script>';
                      }else{
                        echo '<script>
                        swal({
                          title: "Error",
                          text: "Incorrect account credentials",
                          type: "error",
                          icon: "error",
                          button: "Okay",
                        }).then(function() {
                          window.location = "resident_login.php";   //replace google.com with the link u want to go when unsuccesfull login
                        });
                        </script>';
                      }
                    }
                    ?>

                    <div class="small">Doesn't have an account? <a href="resident_register.php">Sign up!</a></div>
                    <hr>
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
    </div>
  </div>
</div>
</body>
<script>
$(document).ready(function(){
    $('#dataTable').dataTable();
});
</script>
</html>
