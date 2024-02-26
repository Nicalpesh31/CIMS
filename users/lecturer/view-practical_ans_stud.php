<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
include "nav.php"; 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from `practical_ans` where `id`='$id'");
$row=mysqli_fetch_array($sql);

?>

<main id="main">


    <section class="container justify-content-center">

        <div class="container text-center">
            <h2 class="h2 display-4 mb-3">Practical</h2>
            
        </div>

        <div class="container mt-5 card">
                <?php echo $row['practical_ans']; ?>          
        </div>
    </section>


</main>
<!-- End #main -->
<?php include "footer.php"; ?>