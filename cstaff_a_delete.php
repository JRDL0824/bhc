<?php
    include "includes/conn.php";
    if(isset($_GET['a_id'])){
        $a_id = $_GET['a_id'];
        $sql = "DELETE from `announcement` where a_id=$a_id";
        $conn->query($sql);
    }
    header('location:centerstaff_viewannouncement.php');
    exit;
?>