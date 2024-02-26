<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $usersessionemail=$_SESSION['userid'];
include "nav.php";
?>

    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container justify-content-center text-center">
   
            <h2 class="h2 display-4 mb-3">Notes</h2>
            <table id="students-table2" class="display cell-border stripe hover order-column" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Semester</th>
                        <th>Branch</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $studet=mysqli_query($con,"select * from `students_detail` where `email`='$usersessionemail'");
                    $rowarrstud=mysqli_fetch_array($studet);
                     $branch=$rowarrstud['branch'];
                     echo $semester=$rowarrstud['semester'];
                    
                    $sqlsel=mysqli_query($con,"select * from `notes` where `branch`='$branch' and `semester`='$semester'");
                
                    $srno=1;
                    
                    while($row=mysqli_fetch_array($sqlsel)){
                     ?>
                    <tr>
                        <td><?php echo $srno; ?></td>
                        <td><?php echo $row['subject'];?></td>
                        <td><?php echo $row['semester'];?></td>
                        <td><?php echo $row['branch'];?></td>
                        
                        <td>
                            <a href="<?php echo "../lecturer/".$row['file_url'];?>" target="_blanck" class="text-primary" title="View">
                                <i class="fa fa-eye" aria-hidden="true"></i>
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