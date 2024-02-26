<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM `questions` WHERE `id`='$id'");
header("location:questions-analytics.php");
    ?>