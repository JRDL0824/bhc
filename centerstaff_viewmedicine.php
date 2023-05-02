<?php
include('includes/header.php'); 
include('includes/staff_navbar.php'); 
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div style="float:right;"></div>
      <h6 class="m-0 font-weight-bold text-primary">Medecine supplies</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="display:none"> I.D </th>
              <th> Brand name </th>
              <th> Generic name </th>
              <th>Dossage</th>
              <th>Supplies</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM medicine ";
            $result = $conn->query($sql);
            if(!$result){
              die("Invalid query!");
            }
            while($row=$result->fetch_assoc()){
              echo "
              <tr>
              <td style='display:none'>$row[id]</td>
              <td>$row[b_name]</td>
              <td>$row[g_name]</td>
              <td>$row[dossage]</td>
              <td>$row[supplies]</td>
              <td>
              <a class='btn btn-danger' href='cstaff_delete.php?id=$row[id]'>Delete</a>
              </td>
              </tr>
              ";}
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