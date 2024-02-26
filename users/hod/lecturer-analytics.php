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
                <a href="add-lecturer.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i> Add Lecturer
                </a>
            </div>
            <h2 class="h2 display-4 mb-3">Lecturer Analytics</h2>
            <table id="lecturers-table" class="display cell-border stripe hover order-column">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Lecturer</th>    
                        <th>Branch</th>         
                        <th>Subject</th>         
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql=mysqli_query($con,"select * from `lecturer_details`");
                    $srno=1;
                    while($arr=mysqli_fetch_array($sql)){

                        $lectemail=$arr['email']; 
                        $lectid=mysqli_query($con,"select *  from `subject` where `lect_id`='$lectemail'");
                        
                        
                       // print_r($arrlecid);
                    ?>
                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $arr['firstname']; echo " ".$arr['middlename']; echo " ".$arr['lastname'];?></td>
                        <td><?php while($arrlecid=mysqli_fetch_array($lectid)){
                            echo $arrlecid['subject'].",";
                        }?></td>
                        <td><?php echo $arrlecid['subject']; ?></td>
                       
                        <td>
                            <a href="deletelecturer.php?email=<?php echo $arr['email']; ?>" class="text-danger" title="Delete">
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


</html><?php include "footer.php"; ?>