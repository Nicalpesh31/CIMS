<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $notice_id=$_GET['id'];
$sql=mysqli_query($con,"select * from `notice` where `id`='$notice_id'");

$arr=mysqli_fetch_array($sql);
include "nav.php";
?>

	<main id="main">

        <!-- Notice Content -->
        <div class="container my-5">
            <h1 class="h1 display-4 text-center">Notice Title</h1>
            <div class="container my-3 card p-3">
                <?php echo $arr['notice_content'];?>
            </div>
        </div>
        <!-- Notice Content -->
        
	</main>
  <!-- End #main -->
  <?php include "footer.php"; ?>