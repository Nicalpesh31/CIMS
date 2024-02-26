<?php
include "../../db.php";
if(!isset($_SESSION['userid'])){
header("location:../../index.php");
}
$quesid=$_GET['id'];
mysqli_query($con,"DELETE FROM `assignment_ans` WHERE `quesid`='$quesid'");

header("location:assignments-analytics.php");
?>