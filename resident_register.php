<?php
require 'includes/conn.php';
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
                <div class="col-sm-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light mx-4">Create Account</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label class="small mb-1">Username</label>
                                    <input type="text" class="form-control py-4" name="u_name" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Fullname</label>
                                    <input type="text" class="form-control py-4" name="u_fname" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Address</label>
                                    <input type="text" class="form-control py-4" name="u_address" placeholder="Enter Address" required>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1">Contact No.</label>
                                            <input type="text" class="form-control py-4" name="u_contact" placeholder="Enter Contact No." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Email</label>
                                    <input type="email" class="form-control py-4" name="u_email" placeholder="Enter email address" required>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1">Password</label>
                                            <input type="password" class="form-control py-4" name="u_password" placeholder="Enter password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1">Confirm Password</label>
                                            <input type="password" class="form-control py-4" name="confirm_pass" placeholder="Confirm password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-4 mb-0">
                                    <input type="submit" class="btn create_acc btn-primary btn-block" name="create_acc" value="Create Account">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small">Have an account? <a href="resident_login.php">Log in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if(isset($_POST['create_acc'])){
            $u_name = $_POST['u_name'];
            $u_fname = $_POST['u_fname'];
            $u_address = $_POST['u_address'];
            $u_contact = $_POST['u_contact'];
            $u_email = $_POST['u_email'];
            $u_password = $_POST['u_password'];
            $confirm_pass = $_POST['confirm_pass'];
        
            $check=mysqli_query($conn,"SELECT * FROM resident WHERE u_name = '$u_name' ");
            $checkrows=mysqli_num_rows($check);
            
            if($checkrows>0){
                echo '<script>
                swal({
                    title: "Error",
                    text: "User already Exist",
                    type: "error",
                    icon: "error",
                    button: "Okay",
                }).then(function() {
                    window.location = "resident_register.php";   //replace google.com with the link u want to go when unsuccesfull login
                });
                </script>';
            }
            elseif($u_password != $confirm_pass){
                echo '<script>
                swal({
                    title: "Warning",
                    text: "Password Do not Match",
                    type: "warning",
                    icon: "warning",
                    button: "Okay",
                }).then(function() {
                    window.location = "resident_register.php";   //replace google.com with the link u want to go when unsuccesfull login
                });
                </script>';
            }
            else{  $sql = "INSERT INTO resident (u_name,u_fname,u_address,u_contact,u_email,u_password) VALUES ('$u_name','$u_fname','$u_address','$u_contact','$u_email','$u_password');";
                if(mysqli_query($conn,$sql)){
                    echo '<script>
                    swal({
                        title: "Success",
                        text: "Register Success",
                        type: "success",
                        icon: "success",
                        button: "Okay",
                    }).then(function() {
                        window.location = "resident_login.php";
                    });
                    </script>';
                }
                else{
                    echo "ERROR:" .$sql.mysqli_error($conn);
                }
            }
        }
        ?>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>