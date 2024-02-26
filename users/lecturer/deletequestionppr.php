<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];

    $question_paper_id=$_GET['question_paper_id'];
    mysqli_query($con,"DELETE FROM `question_paper` WHERE `question_paper_id`='$question_paper_id'");
    header("location:question-paper-analytics.php");
    ?>