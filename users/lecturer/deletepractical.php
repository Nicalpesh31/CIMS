<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}

$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `practical` WHERE `id`='$id'");

header("location:practicals-analytics.php");
?>