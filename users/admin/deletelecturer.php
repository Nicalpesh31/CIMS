<?php
include "../../db.php";
if(!isset($_SESSION['userid'])){
header("location:../../index.php");
}
$email=$_GET['email'];
mysqli_query($con,"DELETE FROM `lecturer_details` WHERE `email`='$email'");
mysqli_query($con,"DELETE FROM `user_details` WHERE `email`='$email'");
header("location:lecturer-analytics.php");
?>