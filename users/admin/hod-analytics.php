<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
include "nav.php";
?>
   
	<main id="main">

   		<!-- ======= Table Section ======= -->
		<section class="container justify-content-center text-center">
            <div class="d-flex justify-content-end">
                <a href="add-hod.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i>
                    Add HOD
                </a>
            </div>
            <h2 class="h2 display-4 mb-3">HOD Analytics</h2>
			<table id="hod-table" class="display cell-border stripe hover order-column" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>HOD</th>
                        <th>Branch</th>          
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql=mysqli_query($con,"select * from `hod_details`");
                    $srno=1;
                    while($arr=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $arr['firstname']; echo " ".$arr['middlename']; echo " ".$arr['lastname'];?></td>
                       
                        <td><?php echo $arr['branch'];?></td>
                      
                        <td>
                            <a href="deletehod.php?email=<?php echo $arr['email']; ?>" class="text-danger" title="Delete">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
		</section>
		<!-- ======= Table Section ======= -->

	</main>
  <!-- End #main -->

  <?php include "footer.php"; ?>