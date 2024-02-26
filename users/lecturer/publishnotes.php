<?php
include "../../db.php";
if (!isset($_SESSION['userid'])) {
    header("location:../../index.php");
}
$sessionemail=$_SESSION['userid'];

$id=$_GET['id'];

mysqli_query($con,"UPDATE `notes` SET `status`='published' WHERE `id`='$id'");

echo "<script>alert('Notes published!!');</script>";

header("location:notes-analytics.php");
?>