<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
$sessionemail=$_SESSION['userid'];
$id=$_GET['id'];
$sel=mysqli_query($con,"select * from `notes` where `id`='$id'");
$row=mysqli_fetch_array($sel);
$file_url=$row['file_url'];
unlink($file_url);
mysqli_query($con,"DELETE FROM `notes` WHERE `id`='$id'");

header("location:notes-analytics.php");
?>