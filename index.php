<?php
include('includes/header.php');
include('includes/conn.php');
?>
<!-- tr -->
<div class="container" >
  <div class="row justify-content-center " ;>
    <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-10">
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Barangay Sambal Ilaya Health Center Appointment System</h1>
                  <h4 class="h4 text-gray-900 mb-4">Login As</h4>
                </div>
                <a href="brgyadmin_login.php" class="btn btn-primary btn-user btn-block"> Barangay Admin </a>
                <a href="centerstaff_login.php" class="btn btn-primary btn-user btn-block"> Health Center Staff </a>
                <a href="resident_login.php" class="btn btn-primary btn-user btn-block"> Resident </a>
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