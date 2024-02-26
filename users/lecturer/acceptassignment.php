<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
include "nav.php"; 

$id=$_GET['id'];

mysqli_query($con,"UPDATE `assignment_ans` SET `accept`='1' WHERE `id`='$id'");
//header("location:view-assignment_ans.php");
echo "<script>window.location.href = 'view-assignment_ans.php';</script>";

?>
