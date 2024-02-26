<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
include "nav.php"; 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from `assignment` where `id`='$id'");
$row=mysqli_fetch_array($sql);

?>

<main id="main">


    <section class="container justify-content-center">

        <div class="container text-center">
            <h2 class="h2 display-4 mb-3">Assignment</h2>
            
        </div>

        <div class="container mt-5 card">
                <?php echo $row['contents']; ?>          
        </div>
    </section>


</main>
<!-- End #main -->
<?php include "footer.php"; ?>