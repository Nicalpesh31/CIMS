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
                <a href="add-notice.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i> Add Notice
                </a>
            </div>
            <h2 class="h2 display-4 mb-3">All Notices</h2>
            <table id="notices-table" class="display cell-border stripe hover order-column">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Notice Title</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>View</th>
                        
                        <th>Delete</th>
                        <th>Publish</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql=mysqli_query($con,"select * from `notice`");
                    $srno=1;
                    while($row=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $srno++;?></td>
                        <td><?php echo $row['notice_title'];?></td>
                        <td><?php echo $row['branch'];?></td>
                      
                        <td><?php echo $row['semester'];?></td>
                        <td>
                            <a href="view-notice.php?id=<?php echo $row['id'];?>" class="text-primary" title="View">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                     
                        <td>
                            <a href="deletenotice.php?id=<?php echo $row['id'];?>" class="text-danger" title="Delete">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="publishnotice.php?id=<?php echo $row['id'];?>" class="text-success" title="Publish">
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


<?php include "footer.php"; ?>