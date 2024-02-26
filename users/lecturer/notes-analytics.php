
<?php 
include "../../db.php";
if(!isset($_SESSION['userid'])){
    header("location:../../index.php");
    }
    $sessionemail=$_SESSION['userid'];
$sqls=mysqli_query($con,"select * from `lecturer_details` where `email`='$sessionemail'");
$arrs=mysqli_fetch_array($sqls);
  $dbbranch=$arrs['branch'];
  
include "nav.php"; 
?>

    <main id="main">

        <!-- ======= Table Section ======= -->
        <section class="container justify-content-center text-center">
            <div class="d-flex justify-content-end">
                <a href="add-notes.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i>Add Notes
                </a>
               
            </div>
            <h2 class="h2 display-4 mb-3">Notes</h2>
            <table id="students-table-notes" class="display cell-border stripe hover order-column" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                       
                        <!--  <th>Assignment Number</th> -->
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>View</th>
                       
                        <th>Delete</th>
                        <th>Publish</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $srno=1;
                    $sqlsub=mysqli_query($con,"select * from `notes` where `branch`='$dbbranch' and `added_by`='$sessionemail'");
                    while($row=mysqli_fetch_array($sqlsub)){
                    ?>
                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td>
                            <a href="<?php echo $row['file_url'];?>" class="text-primary" target="_blank" title="View">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                       
                        <td>
                      
                            <a href="deletenotes.php?id=<?php echo $row['id']; ?>" class="text-danger" title="Delete">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="publishnotes.php?id=<?php echo $row['id']; ?>" class="text-success" title="Publish">
                                <i class="fa fa-television" aria-hidden="true"></i>
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
    <?php 
include "footer.php";

?>