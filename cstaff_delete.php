<?php
    include "includes/conn.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `medicine` where id=$id";
        $conn->query($sql);
    }
    header('location:centerstaff_viewmedicine.php');
    exit;
?>