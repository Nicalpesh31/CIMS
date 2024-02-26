<?php
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $id=$_GET['id'];

    mysqli_query($con,"UPDATE `assignment` SET `status`='published' WHERE `id`='$id'");
    header("location:assignments-analytics.php");
?>