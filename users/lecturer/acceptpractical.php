<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
include "nav.php"; 

$id=$_GET['id'];

mysqli_query($con,"UPDATE `practical_ans` SET `accept`='1' WHERE `id`='$id'");
//header("location:view-practical_ans.php");
echo "<script>window.location.href = 'view-practical_ans.php';</script>";

?>
