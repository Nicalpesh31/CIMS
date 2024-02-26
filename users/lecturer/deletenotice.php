<?php
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $notice_id=$_GET['id'];

    mysqli_query($con,"DELETE FROM `notice` WHERE `id`='$notice_id'");
    header("location:notice-analytics.php");
?>