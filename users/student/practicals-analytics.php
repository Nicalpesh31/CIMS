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
            <h2 class="h2 display-4 mb-3">
                Practicals
            </h2>
            <table id="students-table3" class="display cell-border stripe hover" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>View Question</th>
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

                    $sql=mysqli_query($con,"select * from `practical` where `branch`='$branch' and semester='$semester' and `status`='published'");
                    $srno=1;
                    while($row=mysqli_fetch_array($sql)){
                    ?>


                    <tr>
                        <td><?php echo $srno++; ?></td>
                        <td><?php echo $row['subject'];?></td>
                        <td>
                            <a href="view-practical.php?id=<?php echo $row['id'];?>" class="text-primary" title="View practical">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>'
                        <td>
                            <a href="view-practical_ans.php?id=<?php echo $row['id'];?>" class="text-primary" title="View practical">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="deletepracticalans.php?id=<?php echo $row['id']; ?>" class="text-danger" title="Delete">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="submit-practical.php?subject=<?php echo $row['subject']; ?>&&quesid=<?php echo $row['id']; ?>" class="text-success" title="Submit practical">
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