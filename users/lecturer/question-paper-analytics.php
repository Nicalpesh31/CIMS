
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
        <section class="container-fluid justify-content-center text-center">
            <div class="d-flex justify-content-end">
                <a href="add-question-paper.php" class="btn btn-primary mb-5 me-1">
                    <i class="fa fa-plus-square me-2" aria-hidden="true"></i>Create Question Paper
                </a>
            </div>
            <h2 class="h2 display-4 mb-3">Question Papers</h2>
            <table id="question-papers-table" class="display cell-border stripe hover order-column" style=" width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Question Paper ID</th>
                        <th>Branch</th>
                        <th>Semester</th>
                        <th>Exam Name</th>
                        <th>View</th>
                      
                        <th>Delete</th>
                        <th>Publish</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
    $sql=mysqli_query($con,"select * from `question_paper` where `added_by`='$sessionemail' group by `question_paper_id`");
    $srno=1;
    while($row=mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $srno; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['question_paper_id']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['pprname']; ?></td>
                        <td>
                            <a href="view-question-paper.php?question_paper_id=<?php echo $row['question_paper_id']; ?>" class="text-info" title="View Question Paper">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </td>
                        
                        <td>
                            <a href="deletequestionppr.php?question_paper_id=<?php echo $row['question_paper_id']; ?>" class="text-danger" title="Delete Question Paper">
                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            <a href="publishquesppr.php?question_paper_id=<?php echo $row['question_paper_id']; ?>" class="text-success" title="Publish Question Paper">
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