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
            <!--  <div class="d-flex justify-content-end">
                <a href="add-assignment.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i>Add Assignment
                </a>
            </div> -->
            <h2 class="h2 display-4 mb-3">Assignments</h2>
            <table id="students-table3" class="display cell-border stripe hover" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>View Assignment</th>
                        <th>View Answer</th>
                        <th>Delete Answer</th>
                        <th>Submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $studdet=mysqli_query($con,"select * from `students_detail` where `email`='$sessionemail'");
                    $rowstud=mysqli_fetch_array($studdet);
                    $branch=$rowstud['branch'];                    $semester=$rowstud['semester'];

                    $sql=mysqli_query($con,"select * from `assignment` where `branch`='$branch' and semester='$semester' and `status`='published'");
                    $srno=1;
                    while($row=mysqli_fetch_array($sql)){
                    ?>


                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $row['subject'];?></td>
                        <td>
                            <a href="view-assignment.php?id=<?php echo $row['id'];?>" class="text-primary" title="View assignment">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>'
                        <td>
                            <a href="view-assignment_ans.php?id=<?php echo $row['id'];?>" class="text-primary" title="View assignment">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="deleteassignmentans.php?id=<?php echo $row['id']; ?>" class="text-danger" title="Delete">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="submit-assignment.php?subject=<?php echo $row['subject']; ?>&&quesid=<?php echo $row['id']; ?>" class="text-success" title="Submit assignment">
                                <i class="fa fa-upload" aria-hidden="true"></i>
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