
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];

  
include "nav.php"; 
?>

    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container justify-content-center text-center">
            
            <h2 class="h2 display-4 mb-3">Notes Analytics</h2>
           
        </section>
        <!-- ======= Table Section ======= -->

    </main>
    <!-- End #main -->
    <?php 
include "footer.php";

?>