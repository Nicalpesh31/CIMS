<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    echo "asdsadsadas";
    $sessionemail=$_SESSION['userid'];

    $question_paper_id=$_GET['question_paper_id'];

    mysqli_query($con,"UPDATE `question_paper` SET `status`='1' WHERE `question_paper_id`='$question_paper_id'");
    header("location:question-paper-analytics.php");
    ?>