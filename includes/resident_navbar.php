<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="resident_profile.php">
    <div class="sidebar-brand-icon "></div>
    <div class="sidebar-brand-text mx-1">Barangay Sambal Ilaya Health Center Appointment System</div>
  </a>
  <br>
  <hr class="sidebar-divider my-0">
  <div class="sidebar-heading">Medecine</div>
  <li class="nav-item">
    <a class="nav-link" href="resident_viewmedicine.php">
      <span>View medicine</span>
    </a>
  </li>
  <hr class="sidebar-divider my-0">
  <div class="sidebar-heading">Appointments</div>
  <li class="nav-item">
    <a class="nav-link" href="resident_bookappointment.php">
      <span>Book an Appointment</span>
    </a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="resident_viewappointment.php">
      <span>View appointments</span>
    </a>
  </li> -->
  <hr class="sidebar-divider">
  <div class="sidebar-heading">Announcements</div>
  <li class="nav-item">
    <a class="nav-link" href="resident_viewannouncement.php">
      <span>View announcements</span>
    </a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
</ul>
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <h5 style="font-family:verdana; color:black;">Welcome Resident</h5>
      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Menu</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
    </nav>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="logout.php" method="POST"> 
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>